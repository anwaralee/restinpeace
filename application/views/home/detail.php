<?php
$this->load->view('header');
?>


		<!-- Main Wrapper -->
			<div id="main-wrapper">

				<!-- Main -->
					<div id="main" class="container">
						<div class="row">
						
							<!-- Content -->
								<div id="content" class="8u skel-cell-important">

									<!-- Post -->
										<article class="is-post">
											<header>
												<h2><?php echo $f['name'];?> </h2>
                                                <h3><?php echo $f['country'].",".$f['city'];?></h3>
											<span class="image image-full"><img src="<?php echo site_url('images/'.$f['image'])?>" alt="" /></span>
											<h3><?php echo "From <strong>".$f['dob']."</strong> To <strong>".$f['dod']."</strong>";?></h3>
											<?php echo $f['description'];?>
                                            <br />
                                            <h3>Condolence</h3>
                                            <?php echo $f['condolence'];?>
										</article>
								

                        <div id="fb-root"></div>
                        <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
                        <fb:comments href="http://localhost/restinpeace" num_posts="5" width="500px"></fb:comments>
								</div>
								
							<!-- Sidebar -->
								<div id="sidebar" class="4u">
								
									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt -->
														<article class="is-excerpt">
															<header>
																<span class="date">May 18, 2013</span>
																<h3><a href="#">Ermergerd sterf herpernd</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est 
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="is-excerpt">
															<header>
																<span class="date">May 15, 2013</span>
																<h3><a href="#">Kerfer merks mer herper</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est 
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="is-excerpt">
															<header>
																<span class="date">May 12, 2013</span>
																<h3><a href="#">Blerg persts er fern</a></h3>
															</header>
															<p>Lorem ipsum dolor odio facilisis convallis. Etiam non nunc vel est 
															suscipit convallis non id orci lorem ipsum sed magna consequat feugiat lorem dolore.</p>
														</article>

												</li>
											</ul>
										</section>
								
									<!-- Highlights -->
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight -->
														<article class="is-highlight">
															<header>
																<h3><a href="#">Something of note</a></h3>
															</header>
															<a href="http://regularjane.deviantart.com/art/In-Your-Hands-356733525" class="image image-left"><img src="images/pic06.jpg" alt="" /></a>
															<p>Phasellus  sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam 
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis 
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus 
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button button-icon fa fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight -->
														<article class="is-highlight">
															<header>
																<h3><a href="#">Something of less note</a></h3>
															</header>
															<a href="http://regularjane.deviantart.com/art/Pink-Rain-2009-134901803" class="image image-left"><img src="images/pic07.jpg" alt="" /></a>
															<p>Phasellus  sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam 
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis 
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus 
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button button-icon fa fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
											</ul>
										</section>
								
								</div>

						</div>
					</div>

			</div>
<?php
$this->load->view('footer');
?>