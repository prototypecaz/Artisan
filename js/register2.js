function test(test1,test2,test3,test4){


var first = document.querySelector(test1);
var last = document.querySelector(test2);


first.onchange = function() {
    fetch('./strength.php?password='+this.value).then(function(response) {
        response.text().then(function(meter) {
            
            let strength = document.querySelector(test3);

            switch (true) {
                case (meter <= 2):
                    
                    strength.innerText = "Faible";
                    break;
                case (meter == 3 || meter == 4):
                    strength.innerText = "Moyen";
                    break;
                case (meter == 5):
                    strength.innerText = "Fort";
                    last.removeAttribute('disabled');
                    break;
            }
           
            last.onchange = function() {
                if (first.value === this.value) {
                    document.querySelector(test4).removeAttribute('disabled');
                }
            }
            
        })
    })
}}

