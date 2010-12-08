                        <ul class="mainmenu">
                          <li><?php echo $html->link('Questions','/questions', array('title' => 'Questions', 'class' => $menu->highlight("/$"))); ?></li>
                          <li><?php echo $html->link('Unresolved','/questions/unresolved', array('title' => 'Unresolved', 'class' => $menu->highlight("/questions/unresolved*"))); ?></li>
                          <li><?php echo $html->link('Tags','/tags', array('title' => 'Tags', 'class' => $menu->highlight("/tags*"))); ?></li>
                          <!-- <li><a href="/answers/categories"><span>Categories</span></a></li> -->
                          <li><?php echo $html->link('Users','/users', array('title' => 'Users', 'class' => $menu->highlight("/users*"))); ?></li>
                        </ul>
                        <ul class="askmenu">
                          <li><?php echo $html->link('Ask a Question','/questions/ask', array('title' => 'Ask a Question', 'class' => $menu->highlight("/questions/add*"))); ?></li>
                        </ul>

