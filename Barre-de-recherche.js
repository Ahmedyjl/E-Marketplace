const Voitures = [
    {modele:'Audi'},
    {modele:'Audi Q8 e-tron'},
    {modele:'Audi R8 LMS 2015'},
    {modele:'Audi R8 2022'},
    {modele:'Audi RSQ8'},
    {modele:'Audi RS 7'},
    {modele:'Q8 e-tron'},
    {modele:'R8 LMS 2015'},
    {modele:'R8 2022'},
    {modele:'RSQ8'},
    {modele:'RS 7'},

    {modele:'BMW'},
    {modele:'BMW I4 2022'},
    {modele:'BMW Ix3 2020'},
    {modele:'BMW I7'},
    {modele:'BMW M2 CS'},
    {modele:'BMW M8 2020'},
    {modele:'I4 2022'},
    {modele:'Ix3 2020'},
    {modele:'I7'},
    {modele:'M2 CS'},
    {modele:'M8 2020'},

    {modele:'Peugeot'},
    {modele:'Peugeot 3008'},
    {modele:'Peugeot 508'},
    {modele:'Peugeot e-2000'},
    {modele:'Peugeot 308 SW'},
    {modele:'Peugeot 9X8 hypercar'},
    {modele:'3008'},
    {modele:'508'},
    {modele:'e-2000'},
    {modele:'308 SW'},
    {modele:'9X8 hypercar'},

    
    {modele:'Microsoft'},
    {modele:'Microsoft Xbox Series X'},
    {modele:'Microsoft Surface Pro 8'},
    {modele:'Microsoft 365 Family'},
    {modele:'Microsoft Windows 11 Pro'},
    {modele:'Microsoft LifeCam Cinema'},
    {modele:'Xbox Series X'},
    {modele:'Surface Pro 8'},
    {modele:'365 Family'},
    {modele:'Windows 11 Pro'},
    {modele:'LifeCam Cinema'},
];


const search = document.getElementById('search');

search.addEventListener('keyup', function(){
    const input = search.value;
    
    const result = Voitures.filter(item => item.modele.toLowerCase().includes(input.toLowerCase()));
    
    let suggestion = '';

    if(input !=''){
    result.forEach(resultItem =>
        suggestion +=`
            <div class= "suggestion">${resultItem.modele}</div>
            `    
        )
    }
    document.getElementById('suggestions').innerHTML = suggestion;
})
