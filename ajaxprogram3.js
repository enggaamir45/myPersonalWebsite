// JavaScript Document

var btn = document.getElementById('btn');
var animalContainer = document.getElementById('animals');

btn.addEventListener('click', function(){
	
	var ourRequest = new XMLHttpRequest;
	ourRequest.open('GET', 'animal-1.json', true);
	ourRequest.onload = function(){
	var ourData = JSON.parse(ourRequest.responseText);
	renderHtml(ourData);
};

	ourRequest.send();
});

function renderHtml(data){
	
	var htmlString = "";
	
	for(var i=0; i<data.length; i++){
		console.log(data[i].name);
		htmlString += "<p>" + data[i].name + " is a " + data[i].species + " that likes to eat " ;
	
		for(var m=0; m< data[i].foods.likes.length; m++){
			if(m ==0){
				htmlString += data[i].foods.likes[m];
			}
				else{
					htmlString += " and " + data[i].foods.likes[m];
				}
			 
		}
		
		htmlString += ".</p>";
	}
	animalContainer.insertAdjacentHTML("beforeend", htmlString);

}
	
	
	


