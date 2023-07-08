<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">Dashboard</h4>
			<ul class="breadcrumbs">
				<li class="nav-home">
					<a href="<?= base_url('dashboard') ?>">
						<i class="flaticon-home"></i>
					</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="">Dashboard</a>
				</li>
			</ul>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-danger bubble-shadow-small">
									<i class="fas fa-cubes"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers width-full">
									<p class="card-category">Products</p>
									<h4 class="card-title"><?= $count_products ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-success bubble-shadow-small">
									<i class="fas fa-money-bill	"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers width-full">
									<p class="card-category">Transactions</p>
									<h4 class="card-title"><?= $count_transactions ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>