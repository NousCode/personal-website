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
									html += `<div class="col-3 my-3" >
									<div class="card shadow rounded-4 blogs__cards">
										<figure class="card-img-top">${item.image}</figure>
										<div class="card-body blogs__cards--body">
											<h3 class="card-title">${item.title}</h3>
											<p class="card-text">${item.description}</p>
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
								<div class="col-6">
									<div class="card shadow mb-3 rounded-5 blog__card">
										<div class="row g-0">
											<div class="col-md-5">
												<figure class="blog__card--image">${item.image}</figure>
											</div>
											<div class="col-md-7">
												<div class="card-body blog__card--body pt-5 ps-4">
													<h3 class="card-title">${item.title}</h3>
													<p class="card-text">${item.description}</p>
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



