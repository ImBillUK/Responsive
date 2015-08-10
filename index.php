<?php 
  $page = "Home";
  include './includes/header.php'; 
?>

      <div class="row main-wrapper">
        
        <!--Left Column-->
        <div class="large-3 small-12 columns">
          <div id="leftcol">
            <div class="colbody">
              <h3>Server Status</h3>
              <div class="worldstat">
                <span class="worldstatname">Normal</span>
                <span class="worldstatamt">ONLINE 1</span>
                <div class="worldstatprog"><div class="worldstatpamt">&nbsp;</div></div>
              </div>
              <div class="worldstat">
                <span class="worldstatname">Dev World</span>
                <span class="worldstatamt" style="color:red;">OFFLINE</span>
                <div class="worldstatprog"><div class="worldstatpamt" style="background:none;background-color:red;width: 157px;"></div></div>
                <!-- <span class="worldstatamt">ONLINE 3/25</span>
                <div class="worldstatprog"><div class="worldstatpamt" style="width: 12%"></div></div> -->
              </div>
            </div>
            <div class="colbody">
              <a href="http://community.vestigex.com/register.php" class="button reg-hom">Register</a>
            </div>
          </div>
        </div>

        <!--Center Column-->
        <div class="large-9 small-12 columns">
        <div id="pbg" class="hide-for-small hide-for-medium show-for-large">
            <div id="pbgex">
              <h2>Play from your browser or Download!</h2>
            </div>
            <div class="large-6 columns"><a href="client.jar" class="button expand">Play Now</a></div>
            <div class="large-6 columns"><a href="client.jar" class="button expand">Download</a></div>
          </div>
          <div id="contarea">
            <div id="continner">
              <div id="welcome">
                <h2>Welcome to Vestige-x</h2>
                <p>Vestige-x is a massively fun MMORPG that you can play right from your browser or desktop!</p>
              </div>
              <div class="newspost">
                <div class="newstitle">Latest news</div>
                  <div class="newsdate">Posted by <a href="http://community.vestigex.com/member.php?1-Bill">Bill</a> on 1/08/15</div>
                  <div class="divider"></div>
                <div class="newscontent">
                  <div class="authimg">
                    <img src="./images/test-avatar.png" alt="Vestige-x News Image" class="news_avatar" />
                  </div>
                  <div class="postbod">
                    <div class="postbodtitle">Updates 1st August</div>
                      <p>
                      There were a few updates today including a new look for the client, new armours released into drops and...
                      </p>
                    <a href="http://community.vestigex.com/showthread.php?137-Updates-1st-August" class="read_more">&gt; Read More</a>
                  </div>
                </div>
                
                <div class="divider"></div>
                  
                <ul class="newsmore">
                  <li>
                    <div class="news-item backgrounded">
                    <h3>Updates 26th July</h3>
                    <p>There were a number of updates including...</p>
                    <p><a href="http://community.vestigex.com">Read More &raquo;</a></p>
                    </div>
                  </li> 
                  <li>
                    <div class="news-item backgrounded">
                    <h3>Updates 21st July</h3>
                    <p>There were a number of updates including...</p>
                    <p><a href="http://community.vestigex.com">Read More &raquo;</a></p>
                    </div>
                  </li> 
                  <li>
                    <div class="news-item backgrounded">
                      <h3>New Vote Rewards</h3>
                      <p>We have been looking into vote incentives...</p>
                      <p><a href="http://community.vestigex.com">Read More &raquo;</a></p>
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
            </div>
            </div>


      </div>
    
    <?php 

    include  './includes/footer.php';

     ?>