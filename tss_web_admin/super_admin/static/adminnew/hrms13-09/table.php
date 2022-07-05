<?php include('header.php') ?>
<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="">
   <!-- Begin page -->
   <div id="wrapper">
   <!-- ========== Left Sidebar Start ========== -->
   <div class="left side-menu">
      <div class="slimscroll-menu" id="remove-scroll">
         <!-- LOGO -->
         <div class="topbar-left">
            <a href="index.php" class="logo">
            <span>
            <img src="images/logo-dark-text.png" alt="" >
            </span>
            <i>
            <img src="images/fav.png" alt="">
            </i>
            </a>
         </div>
          <?php include('sidemenu.php') ?>
         <div class="clearfix"></div>
      </div>
      <!-- Sidebar -left -->
   </div>
   <!-- Left Sidebar End -->
   <!-- ============================================================== -->

   <!-- ============================================================== -->
   <div class="content-page">
   <?php include('topnav.php') ?>
   <!-- Start Page content -->
   <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="box_header">
                  <div class="row">
                     <div class="col-md-7 col-12">
                        <div class="mainiconbox"><i class="fa fa-road"></i> </div>
                        <h4 class="m-t-0 header-title">
                           <div class="breadcrumbs ng-scope">
                              <ul>
                                 <li><a href="index.php">Home</a></li>
                                 <li><a href="#">Common Table</a></li>
                              </ul>
                              <div> Common Table </div>
                           </div>
                        </h4>
                     </div>
                     <div class="col-md-5 col-5">
                        <div class="pull-right p-t-10">
                           <a data-toggle="modal" class="newbtn_crete" data-target="#newaccount"> <i class="mdi mdi-plus-circle-outline"></i> New </a>
                           <a class="btn enlarge" data-toggle="tooltip" data-original-title="Fullscreen"><i class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                           <a class="btn dslarge" data-toggle="tooltip" data-original-title="Back"><i class="mdi mdi-fullscreen-exit" aria-hidden="true"></i> </a>
                        </div>
                     </div>
                  </div>
                  <div class="tablebtngropview">
                     <div class="dropdown kanbnsetng">
                        <button class="btn label-default" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i> </button>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-animated kanban_drop" x-placement="bottom-start" >
                           <li><a href="#">New</a></li>
                           <li><a class="cursor" data-target="#kanbnstgsmodal" data-toggle="modal">Kanban Settings</a></li>
                        </ul>
                     </div>
                     <button class="btn label-default newbttn" id="comntablebtn" data-toggle="tooltip" data-original-title="Table View"><i class="fa fa-list" aria-hidden="true"></i> </button>
                     <button class="btn label-default newbttn" id="Kanbanbtn" data-toggle="tooltip" data-original-title="Kanban View"><i class="fa fa-th-large" aria-hidden="true"></i> </button>
                  </div>
               </div>
               <div class="card-box ">
                  <div class="table_rspnsv" id="tableview">
                     <div class="row2 tbl_stngs">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Position</th>
                                 <th>Office</th>
                                 <th>Age</th>
                                 <th>Start date</th>
                                 <th>Salary</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><a href="#/">Tiger Nixon</a></td>
                                 <td>System Architect</td>
                                 <td>Edinburgh</td>
                                 <td>61</td>
                                 <td>2011/04/25</td>
                                 <td>$320,800</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Garrett Winters</a></td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>63</td>
                                 <td>2011/07/25</td>
                                 <td>$170,750</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Ashton Cox</a></td>
                                 <td>Junior Technical Author</td>
                                 <td>San Francisco</td>
                                 <td>66</td>
                                 <td>2009/01/12</td>
                                 <td>$86,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Cedric Kelly</a></td>
                                 <td>Senior Javascript Developer</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2012/03/29</td>
                                 <td>$433,060</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Airi Satou</a></td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>33</td>
                                 <td>2008/11/28</td>
                                 <td>$162,700</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Brielle Williamson</a></td>
                                 <td>Integration Specialist</td>
                                 <td>New York</td>
                                 <td>61</td>
                                 <td>2012/12/02</td>
                                 <td>$372,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Herrod Chandler</a></td>
                                 <td>Sales Assistant</td>
                                 <td>San Francisco</td>
                                 <td>59</td>
                                 <td>2012/08/06</td>
                                 <td>$137,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Rhona Davidson</a></td>
                                 <td>Integration Specialist</td>
                                 <td>Tokyo</td>
                                 <td>55</td>
                                 <td>2010/10/14</td>
                                 <td>$327,900</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Colleen Hurst</a></td>
                                 <td>Javascript Developer</td>
                                 <td>San Francisco</td>
                                 <td>39</td>
                                 <td>2009/09/15</td>
                                 <td>$205,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Sonya Frost</a></td>
                                 <td>Software Engineer</td>
                                 <td>Edinburgh</td>
                                 <td>23</td>
                                 <td>2008/12/13</td>
                                 <td>$103,600</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Jena Gaines</a></td>
                                 <td>Office Manager</td>
                                 <td>London</td>
                                 <td>30</td>
                                 <td>2008/12/19</td>
                                 <td>$90,560</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Quinn Flynn</a></td>
                                 <td>Support Lead</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2013/03/03</td>
                                 <td>$342,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Charde Marshall</a></td>
                                 <td>Regional Director</td>
                                 <td>San Francisco</td>
                                 <td>36</td>
                                 <td>2008/10/16</td>
                                 <td>$470,600</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Haley Kennedy</a></td>
                                 <td>Senior Marketing Designer</td>
                                 <td>London</td>
                                 <td>43</td>
                                 <td>2012/12/18</td>
                                 <td>$313,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Tatyana Fitzpatrick</a></td>
                                 <td>Regional Director</td>
                                 <td>London</td>
                                 <td>19</td>
                                 <td>2010/03/17</td>
                                 <td>$385,750</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Michael Silva</a></td>
                                 <td>Marketing Designer</td>
                                 <td>London</td>
                                 <td>66</td>
                                 <td>2012/11/27</td>
                                 <td>$198,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Paul Byrd</a></td>
                                 <td>Chief Financial Officer (CFO)</td>
                                 <td>New York</td>
                                 <td>64</td>
                                 <td>2010/06/09</td>
                                 <td>$725,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Gloria Little</a></td>
                                 <td>Systems Administrator</td>
                                 <td>New York</td>
                                 <td>59</td>
                                 <td>2009/04/10</td>
                                 <td>$237,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Bradley Greer</a></td>
                                 <td>Software Engineer</td>
                                 <td>London</td>
                                 <td>41</td>
                                 <td>2012/10/13</td>
                                 <td>$132,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Dai Rios</a></td>
                                 <td>Personnel Lead</td>
                                 <td>Edinburgh</td>
                                 <td>35</td>
                                 <td>2012/09/26</td>
                                 <td>$217,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Jenette Caldwell</a></td>
                                 <td>Development Lead</td>
                                 <td>New York</td>
                                 <td>30</td>
                                 <td>2011/09/03</td>
                                 <td>$345,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Yuri Berry</a></td>
                                 <td>Chief Marketing Officer (CMO)</td>
                                 <td>New York</td>
                                 <td>40</td>
                                 <td>2009/06/25</td>
                                 <td>$675,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Caesar Vance</a></td>
                                 <td>Pre-Sales Support</td>
                                 <td>New York</td>
                                 <td>21</td>
                                 <td>2011/12/12</td>
                                 <td>$106,450</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Doris Wilder</a></td>
                                 <td>Sales Assistant</td>
                                 <td>Sidney</td>
                                 <td>23</td>
                                 <td>2010/09/20</td>
                                 <td>$85,600</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Angelica Ramos</a></td>
                                 <td>Chief Executive Officer (CEO)</td>
                                 <td>London</td>
                                 <td>47</td>
                                 <td>2009/10/09</td>
                                 <td>$1,200,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Gavin Joyce</a></td>
                                 <td>Developer</td>
                                 <td>Edinburgh</td>
                                 <td>42</td>
                                 <td>2010/12/22</td>
                                 <td>$92,575</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Jennifer Chang</a></td>
                                 <td>Regional Director</td>
                                 <td>Singapore</td>
                                 <td>28</td>
                                 <td>2010/11/14</td>
                                 <td>$357,650</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Brenden Wagner</a></td>
                                 <td>Software Engineer</td>
                                 <td>San Francisco</td>
                                 <td>28</td>
                                 <td>2011/06/07</td>
                                 <td>$206,850</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Fiona Green</a></td>
                                 <td>Chief Operating Officer (COO)</td>
                                 <td>San Francisco</td>
                                 <td>48</td>
                                 <td>2010/03/11</td>
                                 <td>$850,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Shou Itou</a></td>
                                 <td>Regional Marketing</td>
                                 <td>Tokyo</td>
                                 <td>20</td>
                                 <td>2011/08/14</td>
                                 <td>$163,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Michelle House</a></td>
                                 <td>Integration Specialist</td>
                                 <td>Sidney</td>
                                 <td>37</td>
                                 <td>2011/06/02</td>
                                 <td>$95,400</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Suki Burks</a></td>
                                 <td>Developer</td>
                                 <td>London</td>
                                 <td>53</td>
                                 <td>2009/10/22</td>
                                 <td>$114,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Prescott Bartlett</a></td>
                                 <td>Technical Author</td>
                                 <td>London</td>
                                 <td>27</td>
                                 <td>2011/05/07</td>
                                 <td>$145,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Tiger Nixon</a></td>
                                 <td>Team Leader</td>
                                 <td>San Francisco</td>
                                 <td>22</td>
                                 <td>2008/10/26</td>
                                 <td>$235,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Martena Mccray</a></td>
                                 <td>Post-Sales support</td>
                                 <td>Edinburgh</td>
                                 <td>46</td>
                                 <td>2011/03/09</td>
                                 <td>$324,050</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Unity Butler</a></td>
                                 <td>Marketing Designer</td>
                                 <td>San Francisco</td>
                                 <td>47</td>
                                 <td>2009/12/09</td>
                                 <td>$85,675</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Howard Hatfield</a></td>
                                 <td>Office Manager</td>
                                 <td>San Francisco</td>
                                 <td>51</td>
                                 <td>2008/12/16</td>
                                 <td>$164,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Hope Fuentes</a></td>
                                 <td>Secretary</td>
                                 <td>San Francisco</td>
                                 <td>41</td>
                                 <td>2010/02/12</td>
                                 <td>$109,850</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Vivian Harrell</a></td>
                                 <td>Financial Controller</td>
                                 <td>San Francisco</td>
                                 <td>62</td>
                                 <td>2009/02/14</td>
                                 <td>$452,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Timothy Mooney</a></td>
                                 <td>Office Manager</td>
                                 <td>London</td>
                                 <td>37</td>
                                 <td>2008/12/11</td>
                                 <td>$136,200</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Jackson Bradshaw</a></td>
                                 <td>Director</td>
                                 <td>New York</td>
                                 <td>65</td>
                                 <td>2008/09/26</td>
                                 <td>$645,750</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Olivia Liang</a></td>
                                 <td>Support Engineer</td>
                                 <td>Singapore</td>
                                 <td>64</td>
                                 <td>2011/02/03</td>
                                 <td>$234,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Bruno Nash</a></td>
                                 <td>Software Engineer</td>
                                 <td>London</td>
                                 <td>38</td>
                                 <td>2011/05/03</td>
                                 <td>$163,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Sakura Yamamoto</a></td>
                                 <td>Support Engineer</td>
                                 <td>Tokyo</td>
                                 <td>37</td>
                                 <td>2009/08/19</td>
                                 <td>$139,575</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Thor Walton</a></td>
                                 <td>Developer</td>
                                 <td>New York</td>
                                 <td>61</td>
                                 <td>2013/08/11</td>
                                 <td>$98,540</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Finn Camacho</a></td>
                                 <td>Support Engineer</td>
                                 <td>San Francisco</td>
                                 <td>47</td>
                                 <td>2009/07/07</td>
                                 <td>$87,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Serge Baldwin</a></td>
                                 <td>Data Coordinator</td>
                                 <td>Singapore</td>
                                 <td>64</td>
                                 <td>2012/04/09</td>
                                 <td>$138,575</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Zenaida Frank</a></td>
                                 <td>Software Engineer</td>
                                 <td>New York</td>
                                 <td>63</td>
                                 <td>2010/01/04</td>
                                 <td>$125,250</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Zorita Serrano</a></td>
                                 <td>Software Engineer</td>
                                 <td>San Francisco</td>
                                 <td>56</td>
                                 <td>2012/06/01</td>
                                 <td>$115,000</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Jennifer Acosta</a></td>
                                 <td>Junior Javascript Developer</td>
                                 <td>Edinburgh</td>
                                 <td>43</td>
                                 <td>2013/02/01</td>
                                 <td>$75,650</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Cara Stevens</a></td>
                                 <td>Sales Assistant</td>
                                 <td>New York</td>
                                 <td>46</td>
                                 <td>2011/12/06</td>
                                 <td>$145,600</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Hermione Butler</a></td>
                                 <td>Regional Director</td>
                                 <td>London</td>
                                 <td>47</td>
                                 <td>2011/03/21</td>
                                 <td>$356,250</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Lael Greer</a></td>
                                 <td>Systems Administrator</td>
                                 <td>London</td>
                                 <td>21</td>
                                 <td>2009/02/27</td>
                                 <td>$103,500</td>
                              </tr>
                              <tr>
                                 <td><a href="#/">Jonas Alexander</a></td>
                                 <td>Developer</td>
                                 <td>San Francisco</td>
                                 <td>30</td>
                                 <td>2010/07/14</td>
                                 <td>$86,500</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="table-responsive" id="kanabanexampleview">
                        <div class="tablebox hide">
                           <div class="kanbanbx">
                              <div class="kanban kanbanmrtp">
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgfrst"></div>
                                    <div class="middlestg">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                                 <div class="kanbantd">
                                    <span class="kanbanlitooltiptext">Tooltip text</span>
                                    <div class="beforestgdflt"></div>
                                    <div class="middlestgdflt">Dfgdfgfhbgfng ( 2 )</div>
                                    <div class="afterstglast"></div>
                                 </div>
                              </div>
                              <div class="clear"></div>
                              <div class="kanbanbdy">
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">
                                       <div class="itemedit">
                                          <div class="dropdown">
                                             <button type="button" class="btn label-default dropdown-toggle" data-toggle="dropdown"></button>
                                             <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="fistchld"> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class=""> <a href="">Dfgdfgfhbgfng </a>
                                       </p>
                                       <p class="">sdads</p>
                                       <p class="">sdads</p>
                                    </li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">dfgdfgfhbgfng</li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">dfgdfgfhbgfng</li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">dfgdfgfhbgfng</li>
                                 </ul>
                                 <ul class="kanbantdbody" data-draggable="target">
                                    <h4>Tittle</h4>
                                    <li data-draggable="item" class="kanbanitem">dfgdfgfhbgfng</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end row -->
      </div>
      <!-- container -->
   </div>

   </div>
   </div>

   <div id="newaccount" class="modal fade" role="dialog" data-backdrop="static">
       <div class="modal-dialog modal_lg">
           <!-- Modal content-->
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Modal Header</h4>
                   <div class="pull-right">
                       <a class="btn enlarge_modal" data-toggle="tooltip" data-original-title="Fullscreen"><i class="mdi mdi-crop-free" aria-hidden="true"></i> </a>
                       <a class="btn dslarge_modal" data-toggle="tooltip" data-original-title="Back"><i class="mdi mdi-arrow-expand-all" aria-hidden="true"></i> </a>
                   </div>
               </div>
               <div class="modal-body modal_maxheigt">
                   <form>
                       <div class="col-md-12">
                           <div class="row m-t-15">
                               <div class="col-md-6 colp_r_15">
                                   <div class="row">
                                       <div class="col-md-6 pad5 ">
                                           <div class="form-group bmd-form-group required_item">
                                               <input type="password" class="input form-control">
                                               <label class="inputText">Password</label>
                                           </div>
                                       </div>
                                       <div class="col-md-6 pad5">
                                           <select class="slect select2">
                                               <option>Select A</option>
                                               <option>Select B</option>
                                               <option>Select C</option>
                                               <option>Select D</option>
                                           </select>
                                           <label class="inputText openselect2">select</label>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-6 colp_l_15">
                                   <div class="row">
                                       <div class="col-md-6 pad5">
                                           <div class="form-group">
                                               <div class="form-group bmd-form-group">
                                                   <select class="select2-multi" multiple="multiple">
                                                       <option>Select A</option>
                                                       <option>Select B</option>
                                                       <option>Select C</option>
                                                       <option>Select D</option>
                                                   </select>
                                                   <label class="inputText openselect2">multi select</label>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6 pad5">
                                           <div class="form-group">
                                               <div class="form-group bmd-form-group">
                                                   <input type="text" class="input form-control">
                                                   <label class="inputText openselect2">textfield</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6 colp_r_15">
                                   <div class="row">
                                       <div class="col-md-6 pad5">
                                           <div class="form-group bmd-form-group">
                                               <select class="custom-select">
                                                   <option selected="">Open this select menu</option>
                                                   <option value="1">One</option>
                                                   <option value="2">Two</option>
                                                   <option value="3">Three</option>
                                               </select>
                                               <label class="bmd-label-floating inputText">Commen Select</label>
                                           </div>
                                       </div>
                                       <div class="col-md-6 pad5">
                                           <div class="form-group bmd-form-group">
                                               <div class="input-group">
                                                   <input id="timepicker" type="text" class="form-control input">
                                                   <label class="bmd-label-floating inputText labl_insd">Time picker</label>
                                                   <div class="input-group-append">
                                                       <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-6 colp_l_15">
                                   <div class="row">
                                       <div class="col-md-6 pad5">
                                           <div class="form-group bmd-form-group">
                                               <div class="checkbox checkbox-info">
                                                   <input id="checkbox2" type="checkbox">
                                                   <label for="checkbox2">
                                                       Check me out !
                                                   </label>
                                               </div></div>
                                       </div>
                                       <div class="col-md-6 pad5">
                                           <div class="form-group bmd-form-group">
                                               <div class="radio radio-info">
                                                   <input type="radio" id="customRadio1" name="customRadio">
                                                   <label  for="customRadio1">Custom radio 1</label>
                                               </div>
                                               <div class="radio radio-info">
                                                   <input type="radio" name="customRadio" id="customRadio2" >
                                                   <label for="customRadio2">
                                                       Info
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6 colp_r_15">
                                   <div class="row">
                                       <div class="col-md-6 pad5">
                                           <div class="input-group">
                                               <input type="text" class="form-control input" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                               <label class="bmd-label-floating inputText labl_insd">Datepicker</label>
                                               <div class="input-group-append">
                                                   <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6 colp_l_15">
                                           <div class="input-daterange" id="date-range">
                                               <div class="row">
                                                   <div class="col-md-6 pad5">
                                                       <div class="input-group">
                                                           <input type="text" class="form-control input" name="start" />
                                                           <label class="bmd-label-floating inputText labl_insd">From</label>
                                                           <div class="input-group-append">
                                                               <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="col-md-6 pad5">
                                                       <div class="input-group">
                                                           <input type="text" class="form-control input" name="end" />
                                                           <label class="bmd-label-floating inputText labl_insd">To</label>
                                                           <div class="input-group-append">
                                                               <span class="input-group-text "><i class="mdi mdi-calendar"></i></span>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-6 colp_l_15">
                                   <div class="row">
                                       <div class="col-md-12 pad5">
                                           <div class="form-group bmd-form-group">
                                               <input type="file" class="filestyle input" data-btnClass="btn-info">
                                               <label class="bmd-label-floating inputText">Choose file</label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-6 colp_r_15">
                                   <div class="row">
                                       <div class="col-md-12 pad5 ">
                                           <div class="form-group bmd-form-group required_item">
                                               <textarea rows="3" class="form-control input_textaerea tstarea"></textarea>
                                               <label class="bmd-label-floating inputText">Textarea</label>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                               <div class="col-md-6 colp_l_15">

                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
               </div>
           </div>
       </div>
   </div>
   <div id="kanbnstgsmodal" class="modal fade" role="dialog" data-backdrop="static">
       <div class="modal-dialog modal-md">
           <!-- Modal content-->
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Kanaban Settings</h4>
               </div>
               <div class="modal-body">
                   <div class="col-md-12 col-12 overeffdtfocus">
                       <div class="row">
                           <div class="col-12 m-t-15">

                               <div class="form-group bmd-form-group">
                                   <select class="slect select2">
                                       <option>Select A</option>
                                       <option>Select B</option>
                                       <option>Select C</option>
                                       <option>Select D</option>
                                   </select>
                                   <label class="vz_labl openselect2 inputText">Summerized by</label>
                               </div>
                           </div>
                           <div class="col-12">

                               <div class="form-group bmd-form-group">
                                   <select class="slect select2">
                                       <option>Select A</option>
                                       <option>Select B</option>
                                       <option>Select C</option>
                                       <option>Select D</option>
                                   </select>
                                   <label class="vz_labl openselect2 inputText">Group By</label>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer" style="width: 100%">
                   <div class="col-12 pad0">
                       <div class="rolebtonbox">
                           <button type="submit" class="btn btn-info pull-right">Save</button>
                           <button type="submit" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <?php include("footer.php"); ?>
   <script src="js/jquery.dataTables.min.js"></script>
   <script src="js/dataTables.bootstrap4.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {

          // Default Datatable
          $('#datatable').DataTable();

          //Buttons examples
          var table = $('#datatable-buttons').DataTable({
              lengthChange: false,
              buttons: ['copy', 'excel', 'pdf']
          });

          // Key Tables

          $('#key-table').DataTable({
              keys: true
          });

          // Responsive Datatable
          $('#responsive-datatable').DataTable();

          // Multi Selection Datatable
          $('#selection-datatable').DataTable({
              select: {
                  style: 'multi'
              }
          });

          table.buttons().container()
                  .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
      } );

      $("#Kanbanbtn").click(function(){
          $("#kanabanexampleview .tablebox").addClass("block");
          $("#tableview .tbl_stngs").addClass("hide");
      });
      $("#comntablebtn").click(function(){
          $("#kanabanexampleview .tablebox").removeClass("block");
          $("#tableview .tbl_stngs").removeClass("hide");
      });

   </script>
   <script>
      (function()
      {

          //exclude older browsers by the features we need them to support
          //and legacy opera explicitly so we don't waste time on a dead browser
          if
                  (
                  !document.querySelectorAll
                          ||
                          !('draggable' in document.createElement('span'))
                          ||
                          window.opera
                  )
          { return; }

          //get the collection of draggable items and add their draggable attribute
          for(var
                      items = document.querySelectorAll('[data-draggable="item"]'),
                      len = items.length,
                      i = 0; i < len; i ++)
          {
              items[i].setAttribute('draggable', 'true');
          }

          //variable for storing the dragging item reference
          //this will avoid the need to define any transfer data
          //which means that the elements don't need to have IDs
          var item = null;

          //dragstart event to initiate mouse dragging
          document.addEventListener('dragstart', function(e)
          {
              //set the item reference to this element
              item = e.target;

              //we don't need the transfer data, but we have to define something
              //otherwise the drop action won't work at all in firefox
              //most browsers support the proper mime-type syntax, eg. "text/plain"
              //but we have to use this incorrect syntax for the benefit of IE10+
              e.dataTransfer.setData('text', '');

          }, false);

          //dragover event to allow the drag by preventing its default
          //ie. the default action of an element is not to allow dragging
          document.addEventListener('dragover', function(e)
          {
              if(item)
              {
                  e.preventDefault();
              }

          }, false);

          //drop event to allow the element to be dropped into valid targets
          document.addEventListener('drop', function(e)
          {
              //if this element is a drop target, move the item here

              //then prevent default to allow the action (same as dragover)
              if(e.target.getAttribute('data-draggable') == 'target')
              {
                  e.target.appendChild(item);

                  e.preventDefault();
              }

          }, false);

          //dragend event to clean-up after drop or abort
          //which fires whether or not the drop target was valid
          document.addEventListener('dragend', function(e)
          {
              item = null;

          }, false);

      })();
   </script>
</body>
</html>
