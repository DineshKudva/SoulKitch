const button = document.getElementById("btn");

button.addEventListener("click", getrecipe);

function getrecipe() {
  let meal_input = document.getElementById("food_name").value.trim();
  if (meal_input != "") {
    fetch(`https://www.themealdb.com/api/json/v1/1/search.php?s=${meal_input}`)
      .then((response) => response.json())
      .then((data) => {
        if (data.meals != null) {
          // remove error message
          document.getElementById("err").style.display = "none";

          //enable the recipe to be visible
          document.getElementById("search-result").style.display = "flex";

          //get the information:
          document.getElementById("recipe-head").innerHTML =
            data.meals[0].strMeal;

          document.getElementById("recipe_inst").innerHTML ="Instructions:<br>"+
            data.meals[0].strInstructions;

          document.getElementById("rarea").innerHTML =
            "Place of Origin :<br>" + data.meals[0].strArea;

          document.getElementById("rcat").innerHTML =
            "Category:<br>" + data.meals[0].strCategory;

          if (data.meals[0].strYoutube != "") {
            document.getElementById("rec-vid-link").style.display = "inline";
            document.getElementById("rec-vid-link").href =
              data.meals[0].strYoutube;
          }

          if (data.meals[0].strSource != "") {
            document.getElementById("rec-ref-link").style.display = "inline";
            document.getElementById("rec-ref-link").href =
              data.meals[0].strSource;
          }

          document.getElementById("rec-img").src = data.meals[0].strMealThumb;
          document.getElementById("rec-img").style.display = "block";

          // console.log(typeof(data.meals[0]));
          var Ingredients="";
          var bool=true;
          var i=1;
          while(bool){
            if(data.meals[0]['strIngredient'+i]!=""){
              Ingredients+=i+". "+data.meals[0]['strIngredient'+i] + "&emsp;";
              i++;
            }else{
              bool=false;
            }
          }
          document.getElementById('ring').innerHTML="Ingredients used:<br>"+Ingredients;

          var Measurements="";
          bool=true;
          i=1;
          while(bool){
            if(data.meals[0]['strMeasure'+i]!=""){
              Measurements+=i+". "+data.meals[0]['strMeasure'+i] + "&emsp;";
              i++;
            }else{
              bool=false;
            }
          }
          document.getElementById('rmes').innerHTML="Measurements:<br>"+Measurements;
          
        } else {
          //disable recipe info:
          document.getElementById("search-result").style.display = "none";

          //enable the error message
          document.getElementById("err").style.display = "block";

          //add the error message:
          document.getElementById("err").innerHTML =
            "Sorry! we couldn't find the recipe..";
        }
      });
  }
}
