
  <!--導引列-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <div class="extras" align="right">
                <ul>
                    <li id="name">
                        <?php foreach($datas as $a_data):?>
                        <h4>
                            Hello,
                            <a href="member.php"><?php echo $a_data['m_first_name'];?></a>
                        </h4>
                        <?php endforeach;?>
                    </li>
                    <li id="upload">
                        <p class="upload">
                            <a href="upload.php">上傳新增</a>
                        </p>
                    </li>
                    <li id="logout">
                        <p class="login">
                            <a href="../php/logout.php">登出</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper">
                    <a href="index.php">
                      <img src="../img/logo.png" alt="Multipurpose Twitter Bootstrap Template"></img>
                    </a>
                </li>
                <li class="active">
                </li>
                <li class="has-submenu">
                    <a href="#">關於我們 ▼</a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner">
                            <h4>About us</h4>
                            <ul>
                                <li>
                                    <a href="about_us/what_is_shustart.php">What is SHUSTART</a>
                                </li>
                                <li>
                                    <a href="about_us/who_we_are.php">Who we are</a>
                                </li>
                                <li>
                                    <a href="about_us/contact_us.php">聯絡我們</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
              <li class="has-submenu">
                <a href="#">評評點點 ▼</a>
                <div class="mainmenu-submenu">
                  <div class="mainmenu-submenu-inner">
                    <div>
                      <h4>
                        <a href="discover.php">Field</a>
                      </h4>
                      <ul>
                        <li>
                          <a href="discover/music_article_list.php">&nbsp;Music</a>
                        </li>
                        <li>
                          <a href="discover/art_article_list.php">&nbsp;Art</a>
                        </li>
                        <li>
                          <a href="discover/photograph_article_list.php">&nbsp;Photograph</a>
                        </li>
                        <li>
                          <a href="discover/technology_article_list.php">&nbsp;Technology</a>
                        </li>
                        <li>
                          <a href="discover/film_article_list.php">&nbsp;Film</a>
                        </li>
                        <li>
                          <a href="discover/publishing_article_list.php">&nbsp;Publishing</a>
                        </li>
                        <li>
                          <a href="discover/design_article_list.php">&nbsp;Design</a>
                        </li>
                        <li>
                          <a href="discover/game_article_list.php">&nbsp;Game</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
             	 <li>
                		<a href="pt_list.php">校園尖兵</a>
                </li>
                <li class="has-submenu">
                    <a href="#">學生專區 ▼</a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner">
                          <div>
                        <h4>
                          <a href="https://www.shu.edu.tw/default.aspx">SHU Home</a>
                        </h4>
                        <ul>
                          <li>
                            <a href="http://rtf.shu.edu.tw/">廣電系</a>
                          </li>
                          <li>
                            <a href="http://shunews.shu.edu.tw/">新聞系</a>
                          </li>
                          <li>
                            <a href="http://pc.shu.edu.tw/">公廣系</a>
                          </li>
                          <li>
                            <a href="http://gcdp.shu.edu.tw/">圖傳系</a>
                          </li>
                          <li>
                            <a href="http://ic.shu.edu.tw/">資傳系</a>
                          </li>
                          <li>
                            <a href="https://sites.google.com/a/mail.shu.edu.tw/speechshuedutw/">口傳系</a>
                          </li>
                          <li>
                            <a href="http://cm.shu.edu.tw/">傳管系</a>
                          </li>
                          <li>
                            <a href="http://dma.wp.shu.edu.tw/">數媒系</a>
                          </li>
                          <li>
                            <a href="http://im.wp.shu.edu.tw/">資管系</a>
                          </li>
                          <li>
                            <a href="http://ba.shu.edu.tw/">企管系</a>
                          </li>
                          <li>
                            <a href="http://tourism.wp.shu.edu.tw/">觀光系</a>
                          </li>
                          <li>
                            <a href="http://dteng.shu.edu.tw/">英語系</a>
                          </li>
                          <li>
                            <a href="https://sites.google.com/a/mail.shu.edu.tw/jpn/">日文系</a>
                          </li>
                          <li>
                            <a href="http://ppm.wp.shu.edu.tw/">行管系</a>
                          </li>
                          <li>
                            <a href="http://socpsy.wp.shu.edu.tw/">社心系</a>
                          </li>
                          <li>
                            <a href="http://web.mail.shu.edu.tw/shulawdepartment/">法律系</a>
                          </li>
                          <li>
                            <a href="http://fin.wp.shu.edu.tw/">財經系</a>
                          </li>
                          <li>
                            <a href="http://economics.shu.edu.tw/">經濟系</a>
                          </li>
                          <li>
                            <a href="http://chi.wp.shu.edu.tw/">中文系</a>
                          </li>
                        </ul>
                      </div>
                            <div>
                                <h4>
                                    <a href="graduation.php">畢業展</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="graduation/rtf_works_list.php">廣電系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/news_works_list.php">新聞系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/pc_works_list.php">公廣系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/gcdp_works_list.php">圖傳系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/ic_works_list.php">資傳系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/speech_works_list.php">口傳系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/cm_works_list.php">傳管系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/dma_works_list.php">數媒系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/im_works_list.php">資管系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/ba_works_list.php">企管系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/tourism_works_list.php">觀光系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/eng_works_list.php">英語系</a>
                                    </li>
                                    <li>
                                        <a href="graduation/jpn_works_list.php">日文系</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4>
                                    <a href="media.php">傳技展</a>
                                </h4>
                                <ul>
                                    <li>
                                        <a href="media/rtf_works_list.php">廣電系</a>
                                    </li>
                                    <li>
                                        <a href="media/news_works_list.php">新聞系</a>
                                    </li>
                                    <li>
                                        <a href="media/pc_works_list.php">公廣系</a>
                                    </li>
                                    <li>
                                        <a href="media/gcdp_works_list.php">圖傳系</a>
                                    </li>
                                    <li>
                                        <a href="media/ic_works_list.php">資傳系</a>
                                    </li>
                                    <li>
                                        <a href="media/speech_works_list.php">口傳系</a>
                                    </li>
                                    <li>
                                        <a href="media/cm_works_list.php">傳管系</a>
                                    </li>
                                    <li>
                                        <a href="media/dma_works_list.php">數媒系</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--導引列結束-->