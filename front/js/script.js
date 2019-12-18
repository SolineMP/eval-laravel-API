/* fetch('http://192.168.33.70/api/interns')
    .then((response) => {
        response.json()
            .then((data) => {
                
            })
    });
 */

    document.querySelector("button").addEventListener ('click', () => {
        let interns = document.querySelector("input").value
        fetch(`http://192.168.33.70/api/interns/${interns}`)
            .then((response) => {
                response.json()
                    .then((data) => {

                        internFN = data.message[0].firstname;
                        internLN = data.message[0].lastname;
                        internA = data.message[0].age
                        internPN = data.message[0].phone_number
                        internE = data.message[0].email

                        let h1 = document.createElement('h1');
                        h1.innerHTML = `Prénom : ${internFN}`;

                        let h2 = document.createElement('h1');
                        h2.innerHTML = `Nom : ${internLN}`;

                        let pA = document.createElement('p');
                        pA.innerHTML = `Age : ${internA}`;

                        let pPN = document.createElement('p');
                        pPN.innerHTML = `Numéro de téléphone : ${internPN}`;

                        let pE = document.createElement('p');
                        pE.innerHTML = `Email : ${internE}`


                        document.getElementById('test').innerHTML = '';
                        document.getElementById('test').appendChild(h2); 
                        document.getElementById('test').appendChild(h1);
                        document.getElementById('test').appendChild(pA);
                        document.getElementById('test').appendChild(pPN);
                        document.getElementById('test').appendChild(pE);
                        
            })
        })
    });
    
    
