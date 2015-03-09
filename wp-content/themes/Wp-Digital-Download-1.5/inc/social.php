								<div class="fix social_buttons">
									<div class="fix btn floatleft">
										<div class="fb-like" data-href="<?php the_permalink();?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
									</div>
									<div class="fix btn floatleft">
										<!-- Place this tag where you want the share button to render. -->
										<div class="g-plus" data-action="share" data-annotation="bubble"></div>

										<!-- Place this tag after the last share tag. -->
										<script type="text/javascript">
										  (function() {
											var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
											po.src = 'https://apis.google.com/js/platform.js';
											var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										  })();
										</script>
									</div>
									
									<div class="fix btn floatleft">
										<a href="<?php the_permalink();?>" class="twitter-share-button" data-via="antorjalalin">Tweet</a>
										<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
									</div>
									
									<div class="fix btn floatleft">
										<script src="//platform.linkedin.com/in.js" type="text/javascript">
										  lang: en_US
										</script>
										<script type="IN/Share" data-url="<?php the_permalink();?>" data-counter="right"></script>
									</div>
									
								</div>