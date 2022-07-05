
function enviarAPI(){
  
  const refresh = {
    method: 'POST',
    headers: {Accept: 'application/json',
              'Content-Type': 'application/json'},
              body: JSON.stringify({
                "client_id": "a8cb4d4c-ed96-4cb7-b005-e16cc228345c",
                "client_secret": "8af8083c49ca47d5b45278241ff97134",
                "refresh_token": "e2n--1lHydGU1FFvA-lOWzf_93030Zrvr568CmmR0J8"
              })
  };

  console.log(refresh.body);

  var newAuth ="";

  fetch('https://api.rd.services/auth/token', refresh)
    .then(reponse => reponse.json())
    .then(response => {
      newAuth = response.access_token;
      console.log(newAuth);
    
  
    const options = {
      method: 'POST',
      headers: {Accept: 'application/json',
                'Content-Type': 'application/json',
                Authorization: 'Bearer ' + newAuth},
                body: JSON.stringify({
                                    name: document.querySelector('#nome').value,
                                    email: document.querySelector('#email').value,
                                    mobile_phone: document.querySelector('#telefone').value
                                  })
    };
    
    console.log(options.body);
  
    fetch('https://api.rd.services/platform/contacts', options)
      .then(response => response.json())
      .then(response => console.log(response))
      .catch(err => console.error(err));
  
    console.log(response)
  }

)}; 

