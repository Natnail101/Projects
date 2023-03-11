
	function jsStyle() {
        
    
        // function to change style
        // Change the color and the size of the font
		// in the paragraph with id='text'
            
        var color = document.getElementById("text");
        var size = document.getElementById("text");

        size.style.fontSize = "30pt";
        color.style.color = "blue";
		
	}
    
	function getFormValues() {
		// function to send first and last names
        // to an 'alert' message.
    var name = document.getElementById('fname').value
    var name2 = document.getElementById("lname").value

        alert("Hello!"+" "+name+" "+name2)
	
	}
    function getOptions() {
    // function to display the number of options in an alert()
    // var option = document.getElementById("mySelect").value
    var dropdown = document.getElementById("mySelect");
    let drop = dropdown.options.length + " options.";
        alert("There are "+drop)
	

    }
    //put a mouseover and a mouseout event on the p tag below

    //create a function that is called on the mouseover that turns the text red
    //create a function that is called on the mouseout that turns the text black}
    function mouseOver(sent){
        sent.style.color = 'red';
    }
    function mouseOut(sent){
        sent.style.color = 'black';
    }

     // code two functions multiply and divide functions here
	//hints:
		//when you get a value out of an input, you are getting a string.  To get a number, use parseInt()
		//When you want to output something into the HTML you can use .innerHTML - like document.getElementById("result").innerHTML= "fred";
    {
    function multiply(){
        num1 = document.getElementById("firstoperand").value;
        num2 = document.getElementById("secondoperand").value;
        document.getElementById("result").innerHTML = num1 * num2;

    }
    
    function divide(){
        num1 = document.getElementById("firstoperand").value;
        num2 = document.getElementById("secondoperand").value;
        document.getElementById("result").innerHTML = num1 / num2;
    }
   

    }