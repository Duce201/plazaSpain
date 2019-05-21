function init() {
	//вычитываем файл casa.json
  $.getJSON('bd/casa.json', casaOut);	
}

function casaOut (data) {
	
	// вывод на страницу
	console.log(data);
	 let out = '';
	  for(let key in data) {
	  out += `<div class="col-12 col-md-6 col-xl-4">`;
    out += `<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms"  data-id="${key}">`;
	  out += `<div class="property-thumb">`;
	  out += `<img src="${data[key].img}">`; 
    out += `<div class="list-price"><p>${data[key].price}€</p></div>`;
	  out += `<div class="tag"><span>${data[key].servise} № ${data[key].id}</span></div>`;
    out += `</div>`;
    out += `<div class="property-content">`;
    out += `<h5>${data[key].tytle}</h5>`;
    out += `<p class="location"><img src="img/icons/location.png" alt="">${data[key].city}</p>`;
    out += `<p class="house">${data[key].title}</p>`;
    out += `<p>${data[key].mindescription}</p>`;
    out += `<div class="property-meta-data d-flex align-items-end justify-content-between">`;
    out += `<div class="new-tag"><img src="img/icons/space.png" alt=""><span>${data[key].room}</span></div>`;
    out += `<div class="bathroom"><img src="img/icons/bathtub.png" alt=""><span>${data[key].bathroom}</span></div>`;
    out += `<div class="garage"><img src="img/icons/garage.png" alt=""><span>${data[key].garage}</span></div>`;
    out += `<div class="space"><img src="img/icons/space.png" alt=""><span>${data[key].area} м. кв</span></div>`;
    out += `<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms" ></div>`;
    out += `</div>`;                                  
    out += `</div>`;
    out += `</div>`; 
    out += `</div>`;

                           
      }                      
        
          $('.row-casa').html(out); 
                         
}
$(document).ready(function() {
  init();
});


