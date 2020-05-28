<style>
	.notification-container {
		max-height: 300px;
		overflow-y: scroll;
		margin-top: 10px;
		padding-right: 5px;
	}

	body ::-webkit-scrollbar-thumb {
		background: #955F26 !important;
	}

	::-webkit-scrollbar-track {
		background: transparent !important;
	}

	.judulNotif {
		font-family: 'Myriad Pro Semibold' !important;
		color: #955F26 !important;
	}

	.ui.list>.item a.header {
		cursor: pointer;
		color: #955F26 !important;
	}

	@media screen and (max-width: 767px) {
		.smallNotification {
			padding: 4px;
			width: 680px;
		}

		.judulNotif {
			font-size: 18pt !important;
		}
	}

	@media screen and (max-width: 750px) {
		.smallNotification {
			padding: 4px;
			width: 650px;
		}

		.judulNotif {
			font-size: 16pt !important;
		}
	}

	@media screen and (max-width: 720px) {
		.smallNotification {
			padding: 4px;
			width: 600px;
		}

		.judulNotif {
			font-size: 16pt !important;
		}
	}

	@media screen and (max-width: 700px) {
		.smallNotification {
			padding: 4px;
			width: 500px;
		}

		.judulNotif {
			font-size: 16pt !important;
		}
	}

	@media screen and (max-width: 600px) {
		.smallNotification {
			padding: 4px;
			width: 424px;
		}

		.judulNotif {
			font-size: 14pt !important;
		}
	}
</style>


<div class="ui tablet computer only padded grid">
	<div class="ui secondary top fixed fluid menu">
		<a href="<?php echo base_url('Dashboard'); ?>" class="header item"><img
				src="<?php echo base_url('assets/images/logo.png'); ?>" style="height: auto; width: 12em;"></a>
		<div class=" right menu">
			<div class="item notification">
				<a href="#"><span class="iconify" data-icon="uil-bell" data-inline="false"></span></a>
				<span class="noti_count">
					<?php
						if(isset($notifications)) echo count($notifications);
						else echo "0";
					?>
				</span>
			</div>
			<!-- dropdown notification -->
			<div class="ui wide notification popup bottom left transition">
				<h2 class="ui horizontal divider header judulNotif">
					Notification
				</h2>
				<?php
					if(isset($notifications) && count($notifications) != 0) {
						echo '<div class="notification-container">';
							echo '<div class="ui link celled selection list" style="padding: 4px;width: 280px;">';
								foreach($notifications as $row) {
									echo '<div class="item">';
										echo '<img class="ui avatar image" src="' . base_url('data/users-img/' . $row['userImg']) . '" style="height: 3.2rem; width: auto;">';
										echo '<div class="content">';
											echo '<a class="header">' . $row['fullName'] . '</a>';
											// move description to controller directly
											// echo '<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just now. </div>';
											echo '<div class="description">';
												echo $row['description'];
											echo '</div>';
										echo '</div>';
									echo '</div>';
								}
							echo '</div>';
						echo '</div>';
					}
					else {
						echo '<p style="padding: 4px; width: 280px; text-align: center;">No notifications</p>';
					}
				?>
				<!--
				<div class="notification-container">
					<div class="ui link celled selection list" style="padding: 4px;width: 280px;">
						<div class="item">
							<img class="ui avatar image" src="<?php echo base_url('data/users-img/Kuma.jpg'); ?>"
								style="height: 3.2rem; width: auto;">
							<div class="content">
								<a class="header">Kuma</a>
								<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
									now.
								</div>
							</div>
						</div>
						<div class="item">
							<img class="ui avatar image" src="<?php echo base_url('data/users-img/itsakaseru.png'); ?>"
								style="height: 3.2rem; width: auto;">
							<div class="content">
								<a class="header">Itsakaseru</a>
								<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
									now.
								</div>
							</div>
						</div>
						<div class="item">
							<img class="ui avatar image" src="<?php echo base_url('data/users-img/kaltsit.png'); ?>"
								style="height: 3.2rem; width: auto;">
							<div class="content">
								<a class="header">Kaltsit</a>
								<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
									now.
								</div>
							</div>
						</div>
						<div class="item">
							<img class="ui avatar image" src="<?php echo base_url('data/users-img/kaltsit.png'); ?>"
								style="height: 3.2rem; width: auto;">
							<div class="content">
								<a class="header">Kaltsit</a>
								<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
									now.
								</div>
							</div>
						</div>
						<div class="item">
							<img class="ui avatar image" src="<?php echo base_url('data/users-img/kaltsit.png'); ?>"
								style="height: 3.2rem; width: auto;">
							<div class="content">
								<a class="header">Kaltsit</a>
								<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
									now.
								</div>
							</div>
						</div>
						<div class="item">
							<img class="ui avatar image" src="<?php echo base_url('data/users-img/itsakaseru.png'); ?>"
								style="height: 3.2rem; width: auto;">
							<div class="content">
								<a class="header">Itsakaseru</a>
								<div class="description">Send Request <br> <a><b>Score Re-review</b></a> 5 minute ago.
								</div>
							</div>
						</div>
					</div>
				</div>
				-->
			</div>
			<!-- End dropdown notification -->

			<div class="item">
				<div class="ui brown button topButton">Dashboard</div>
			</div>
			<div class="ui left labeled button item" tabindex="0">
				<div class="ui brown button"
					style="border-radius: .5rem 0 0 .5rem; font-family: 'Myriad Pro Semibold';">Admin</div>
				<div class="ui dark-brown button dropdown user-dropdownButton"
					style="border-radius: 0 .5rem .5rem 0; font-family: 'Myriad Pro Semibold';">
					<i class="dropdown icon" style="color: #fff; margin: 0; font-size: 1rem !important;"></i>
					<div class="menu">
						<div class="item">Sign Out</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="ui mobile only padded grid">
	<div class="ui secondary top fixed fluid menu">
		<a href="<?php echo base_url('Dashboard'); ?>" class="header item"><img
				src="<?php echo base_url('assets/images/logo.png'); ?>" style="height: auto; width: 12em;""></a>
        <div class=" right menu">
			<div class="item">
				<button class="ui icon toggle basic button"
					style="background-color: #955F26 !important; border: 0 !important;">
					<i class="content icon" style="color: #fff;"></i>
				</button>
			</div>
	</div>
	<div class="ui vertical secondary fluid menu">
		<a style="color: #955F26;" class="item topButton">Dashboard</a>
		<a class="item topButton">
			<div class="ui dropdown topButton" style="color: #955F26;">
				Admin <i class="dropdown icon"></i>
				<div class="menu">
					<div class="item">Sign Out</div>
				</div>
			</div>
		</a>
		<a class="item topButton notification" style="color: #955F26;" href="#"><span
				class="noti_count">3</span>Notification</a>
		<!-- dropdown notification -->
		<div class="ui wide notification popup bottom left transition">
			<h2 class="ui horizontal divider header judulNotif">
				Notification
			</h2>
			<div class="notification-container">
				<div class="ui link celled selection list smallNotification">
					<div class="item">
						<img class="ui avatar image" src="<?php echo base_url('data/users-img/Kuma.jpg'); ?>"
							style="height: 3.2rem; width: auto;">
						<div class="content">
							<a class="header">Kuma</a>
							<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
								now.
							</div>
						</div>
					</div>
					<div class="item">
						<img class="ui avatar image" src="<?php echo base_url('data/users-img/itsakaseru.png'); ?>"
							style="height: 3.2rem; width: auto;">
						<div class="content">
							<a class="header">Itsakaseru</a>
							<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
								now.
							</div>
						</div>
					</div>
					<div class="item">
						<img class="ui avatar image" src="<?php echo base_url('data/users-img/kaltsit.png'); ?>"
							style="height: 3.2rem; width: auto;">
						<div class="content">
							<a class="header">Kaltsit</a>
							<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
								now.
							</div>
						</div>
					</div>
					<div class="item">
						<img class="ui avatar image" src="<?php echo base_url('data/users-img/kaltsit.png'); ?>"
							style="height: 3.2rem; width: auto;">
						<div class="content">
							<a class="header">Kaltsit</a>
							<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
								now.
							</div>
						</div>
					</div>
					<div class="item">
						<img class="ui avatar image" src="<?php echo base_url('data/users-img/kaltsit.png'); ?>"
							style="height: 3.2rem; width: auto;">
						<div class="content">
							<a class="header">Kaltsit</a>
							<div class="description">Send Request <br> <a><b>Score Re-review</b></a> just
								now.
							</div>
						</div>
					</div>
					<div class="item">
						<img class="ui avatar image" src="<?php echo base_url('data/users-img/itsakaseru.png'); ?>"
							style="height: 3.2rem; width: auto;">
						<div class="content">
							<a class="header">Itsakaseru</a>
							<div class="description">Send Request <br> <a><b>Score Re-review</b></a> 5 minute ago.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End dropdown notification -->
	</div>
</div>
</div>

<!-- popup list-->
<script>
	$('.notification')
		.popup({
			on: 'click',
			position: 'bottom left',
			delay: {
				show: 300,
				hide: 800
			}
		});

	$('.topButton.notification')
		.popup({
			popup: $('.notification.popup'),
			on: 'click'
		});
</script>
<!-- End popup list-->
