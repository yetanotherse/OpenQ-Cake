                        <ul class="topmenu">
                          <li><a href="/answers/questions"><span>home</span></a></li>
                          <li><a href="/answers/site/contact"><span>contact</span></a></li>
			<?php if($this->Session->read('Auth.User')) { ?>
					<li><a href="/answers/users/logout"><span>logout</span></a></li>
			<?php } else { ?>
                          <li><a href="/answers/users/login"><span>login</span></a></li>
                          <li><a href="/answers/users/register"><span>register</span></a></li>
                          <li><?php echo $facebook->login(array('size' => 'small', 'perms' => 'email,read_stream,publish_stream'));?></li>
			<?php } ?>
                        </ul>
