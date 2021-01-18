
		var SystemUsers = [{username: "erc", password: "qwert"}, {username: "must", password: "qwert"}, {username: "handgait", password: "qwert"}, {username: "gachuurt", password: "qwert"}];
		var webSiteJsDatas = {
		    hourlyData: [],
		    powerData: [],

		};

		setInterval(myTimer, 10000);

		function myTimer(){

			webSiteJsDatas = {
			    hourlyData: [],
			    powerData: [],

			};

			var bar = new Promise((resolve, reject) => {
			    SystemUsers.forEach((value, index, array) => {
			    	bearerGenerators(value, index)
			        if (index === array.length -1) resolve();

			    });
			});

			bar.then(() => {
			    dataPutter(webSiteJsDatas);
			    //console.log(webSiteJsDatas.hourlyData);
			});
			//console.log('changed');
		}
			

		//SystemUsers.forEach(bearerGenerators);

		function dataPutter(jsonData){
			var totalCurrent = 0;
			var totalImplement = 0;
			var totalOverall = 0;
			var totalYear = 0;

			var jsonDataHourly = jsonData.hourlyData;
			var jsonPowerData = jsonData.powerData;
			//console.log(jsonDataHourly);
			//console.log(jsonPowerData);
			setTimeout(function(){
			    for(var i = 0; i < jsonDataHourly.length; i++) {
				    totalYear = totalYear + jsonDataHourly[i].year;
					totalOverall = totalOverall + jsonDataHourly[i].life;
				}
				for(var i = 0; i < jsonPowerData.length; i++) {
				    totalCurrent = totalYear + jsonPowerData[i].current_power;
					totalImplement = totalOverall + jsonPowerData[i].total_capacity;
				}
				$("#totalCurrent").html(totalCurrent.toFixed(1));
				$("#totalOverall").html((totalOverall/1000).toFixed(1));

				totalCurrent = 0;
				totalImplement = 0;
				totalOverall = 0;
				totalYear = 0;

				//console.log(totalCurrent);
				//console.log('now changed');
			}, 10000)
			//console.log(jsonDataHourly.length);
			

		}

		function hourlyDataGenerators(token) { 
			var url = "http://119.40.99.111/api/energy-monitoring";
			
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Authorization", "Bearer "+token);

			xhr.onreadystatechange = function () {
			   if (xhr.readyState === 4) {
			     	webSiteJsDatas.hourlyData.push(jQuery.parseJSON(xhr.responseText).photo_voltaic);
			   }};

			xhr.send();

		}

		function powerDataGenerators(token) { 
			var url = "http://119.40.99.111/api/power-right-now";

			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Authorization", "Bearer "+token);

			xhr.onreadystatechange = function () {
			   if (xhr.readyState === 4) {
			     	webSiteJsDatas.powerData.push(jQuery.parseJSON(xhr.responseText).inverters);
			   }};

			xhr.send();

		}

		function bearerGenerators(item, index) {
		  //console.log(item.username);
		  	
		  	/* webSiteJsDatas.accounting.push({ 
		        "token" : item.token,
		        "lastName"  : item.lastName,
		        "age"       : item.age 
		    }); */
			
			var url = "http://119.40.99.111/api/login?username="+item.username+"&password="+item.password+"";

			var xhr = new XMLHttpRequest();
			xhr.open("POST", url);

			xhr.setRequestHeader("Accept", "application/json");
			xhr.setRequestHeader("Content-Type", "");

			xhr.onreadystatechange = function () {
			   if (xhr.readyState === 4) {
			      //console.log(jQuery.parseJSON(xhr.responseText).token);
			      
			      hourlyDataGenerators(jQuery.parseJSON(xhr.responseText).token);
			      powerDataGenerators(jQuery.parseJSON(xhr.responseText).token);
			      
			   }};

			var data = `{
				"data": {
					"username": "unitelbundle",
					"password": "unitelbundle"
			        "grant_type": "password"
				}
			}`;

			xhr.send(data); 

		}

		
