fetch('http://192.168.33.70/api/interns')
    .then((response) => {
        response.json()
            .then((data) => {
                
            let table = document.createElement("table")
            document.getElementById('myTable').appendChild(table)
            
            let tr1 = document.createElement("tr")  
            table.appendChild(tr1)
            
            let th1 = document.createElement("th")
            th1.innerHTML = "Nom"; 
            tr1.appendChild(th1);
            
            let th2 = document.createElement("th")
            th2.innerHTML = "Prénom"; 
            tr1.appendChild(th2);
                
            let th3 = document.createElement("th")
            th3.innerHTML = "Age"; 
            tr1.appendChild(th3);
                
            let th4 = document.createElement("th")
            th4.innerHTML = "Numéro de téléphone"; 
            tr1.appendChild(th4);
                
            let th5 = document.createElement("th")
            th5.innerHTML = "Email"; 
                tr1.appendChild(th5);
                
            let th6 = document.createElement('th')
            th6.innerHTML = "Modifier";
            tr1.appendChild(th6) 
            
            let th7 = document.createElement('th');
            th7.innerHTML = "Supprimer";
            tr1.appendChild(th7);    

            data.description.forEach(Element => {
                console.log(data.description);  
                console.log(Element.firstname);
        
                let tr2 = document.createElement("tr")
                document.getElementById('myTable').appendChild(tr2)

                let td1 = document.createElement('td')
                td1.innerHTML = Element.firstname
                tr2.appendChild(td1) 

                let td2 = document.createElement('td')
                td2.innerHTML = Element.lastname
                tr2.appendChild(td2)
                
                let td3 = document.createElement('td')
                td3.innerHTML = Element.age
                tr2.appendChild(td3)
                
                let td4 = document.createElement('td')
                td4.innerHTML = Element.phone_number
                tr2.appendChild(td4)

                let td5 = document.createElement('td')
                td5.innerHTML = Element.email
                tr2.appendChild(td5);

                let td6 = document.createElement('button')
                tr2.appendChild(td6)
            });
                
            
                



        })
    })