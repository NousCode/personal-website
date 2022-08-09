(function($){

	$(document).ready(function(){
			$.ajax({
					url: pg.apiurl+"blogs/8",
					method: "GET",
					beforeSend: function() {
							$("#resultado-blogs").html("Cargando...");
					},
					success: function(data) {
							let html = "";
							data.forEach(item => {
									html += `<div class="col-12 my-3 col-sm-6 col-md-4 col-lg-3 container-blogs__cards" >
									<div class="card shadow rounded-4 blogs__cards mx-2">
										<figure class="card-img-top">${item.image}</figure>
										<div class="card-body blogs__cards--body">
											<h3 class="card-title">${item.title}</h3>
											<p class="card-text">${item.description}</p>
											<p><strong>Fecha: </strong>${item.date}</p>
											<div class="text-center blogs__cards--btn" >
												<a href="${item.link}" class="btn btn-outline-success rounded-3">Leer más</a>
											</div>
										</div>
									</div>
									</div>`
							});
							$("#resultado-blogs").html(html);
					},
					error: function(error) {
							console.log(error);
					}
			})
	})

	$(document).ready(function(){
		$.ajax({
				url: pg.apiurl+"blogs",
				method: "GET",
				beforeSend: function() {
						$("#all-blogs").html("Cargando...");
				},
				success: function(data) {
						let html = "";
						data.forEach(item => {
								html += `
								<div class="col-12 col-md-6 col-lg-6">
									<div class="card shadow mb-3 rounded-5 blog__card">
										<div class="row g-0">
											<div class="col-md-5">
												<figure class="blog__card--image">${item.image}</figure>
											</div>
											<div class="col-md-7">
												<div class="card-body blog__card--body p-0 pt-lg-5 ps-lg-4">
													<h3 class="card-title">${item.title}</h3>
													<p class="card-text">${item.description}</p>
													<p><strong>Fecha: </strong>${item.date}</p>
													<div class="text-center blog__card--btn" >
														<a href="${item.link}" class="btn btn-outline-success rounded-3">Leer más</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
									`
						});
						$("#all-blogs").html(html);
				},
				error: function(error) {
						console.log(error);
				}
		})
})
})(jQuery);

const toggleMenuElement = document.getElementById('toggle-menu');
const mainMenuElement = document.getElementById('menu-main-menu');

toggleMenuElement.addEventListener('click', ()=>{
	setTimeout(mainMenuElement.classList.toggle('main-menu--show'), 0.5);

})
