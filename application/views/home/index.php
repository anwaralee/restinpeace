<?php
$this->load->view('header');
?>
<div id="features-wrapper">

				<!-- Features -->
					<section id="features" class="container">
						<header>
							<h2>Featured Condolence</h2>
						</header>
						<div class="row">
                        <?php
                        if($feat)
                        {
                            foreach($feat as $f)
                            {
                                ?>
                                <div class="4u">

								<!-- Feature -->
									<section>
										<a href="#" class="image image-full"><img src="<?php echo site_url('images/'.$f['image'])?>" alt="" /></a>
										<header>
											<h3><?php echo $f['name'];?><br /><?php echo $f['dob'].' - '.$f['dod'];?></h3>
										</header>
										<p><?php echo substr($f['condolence'],0,100).'...';?></p>
									</section>

							     </div>
                                <?php
                            }
                        }
                        ?>
						</div>
						
					</section>
			
			</div>
		
		<!-- Banner Wrapper -->
			<div id="banner-wrapper">
				<div class="inner">

					<!-- Banner -->
						<section id="banner" class="container">
							<p style="margin: 0 10px;">We pray almighty to provide strength to the family of all the <strong>deceased.</strong></p>
						</section>

				</div>
			</div>

		<!-- Main Wrapper -->
			<div id="features-wrapper">

				<!-- Features -->
					<section id="features" class="container">
						<header>
							<h2>Recent Condolence</h2>
						</header>
						<div class="row">
							<?php
                            if($recent)
                            {
                                foreach($recent as $f)
                                {
                                    ?>
                                    <div class="4u">
    
    								<!-- Feature -->
    									<section>
    										<a href="#" class="image image-full"><img src="<?php echo site_url('images/'.$f['image'])?>" alt="" /></a>
    										<header>
    											<h3><?php echo $f['name'];?><br /><?php echo $f['dob'].' - '.$f['dod'];?></h3>
    										</header>
    										<p>
                                            <?php echo substr($f['condolence'],0,100).'...';?>
                                            <br />
                                            Added By:
                                            <br />
                                            <div class="fbdetail">
                                            <div class="fbim">
                                            <?php $fbimage = 'https://graph.facebook.com/'.$f['addedBy'].'/picture'; echo '<img src="'.$fbimage.'"/>';
                                            ?>
                                            </div>
                                            <div class="fbname">
                                            <?php
                                            echo json_decode(file_get_contents('http://graph.facebook.com/'.$f['addedBy']))->name;
                                             ?> 
                                             </div>
                                             <div class="clear"></div>
                                             </div>
                                            </p>
    									</section>
    
    							     </div>
                                    <?php
                                }
                            }
                            ?>
						</div>
                        <div class="pagination">
                        <?php echo $this->pagination->create_links();?>
                        </div>
						
					</section>
			
			</div>
<?php
$this->load->view('footer');
?>