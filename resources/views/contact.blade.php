@extends('layout')

@section('content')

<div id="page-banner-area" class="page-banner">
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Contact Us</h2>
            <a href="{{url('/')}}"><i class="lni-home"></i> Home</a>
            <span class="crumbs-spacer"><i class="lni-chevron-right"></i></span>
            <span class="current">Contact Us</span>
        </div>
    </div>
</div>

<section id="contact-section" style="max-width:100%;">
    <div class="container" style="max-width:100%;">
        <div class="row" style=" padding: 5px 5px;">

<div style="margin: auto; padding: 15px 0px; height: auto !important;" itemscope="" itemtype="http://schema.org/Organization">
    <div class="enclosingBox">
        <h3>Company Overview</h3>
        <div class="contentBox">

            {{ get_settings('web_title') }} LIMITED was founded on 2015-01-20 and had its registered office in 1 Croft Court Plumpton Close, Whitehills Business Park, Blackpool, England, FY4 5PR  <p>		</p></div>

        <div class="col-lg-5 col-md-6"  style="float:left;margin:5px;width:98%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
            <div class="heading2" id="keyData">Key Data</div>
            <!-- Key data -->

            <div>
                <table cellspacing="0" border="0">
                    <tbody><tr><th align="left">Company Name </th><td></td></tr>
                    <tr><td itemprop="legalName"> {{ get_settings('web_title') }} LIMITED </td> </tr>
                    <tr><td>&nbsp;</td> </tr>
                    <tr><th align="left">Legal Registered Office </th> </tr>
                    <tr> <td itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><span itemprop="addressLocality">1 Croft Court Plumpton Close, Whitehills Business Park, Blackpool, England, FY4 5PR </span><br><span itemprop="addressRegion"></span><br><span itemprop="postalCode"></span><br></td></tr><tr><td>&nbsp;</td> </tr></tbody></table></div>		</div>
        <div class="col-lg-6 col-md-6"  style="float:left;margin:5px;width:98%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
            <div class="heading2" id="filing">Filing Information</div>

            <table border="0"> <tbody>
                <tr><th align="left">Date formed</th><td>&nbsp;</td><td>2015-01-20 </td></tr>
                <tr><th align="left">Country</th><td>&nbsp;</td><td>England </td></tr>
                <tr><th align="left">Origin Country</th><td>&nbsp;</td><td>England </td></tr>
                <tr><th align="left">Type</th><td>&nbsp;</td><td>Private Limited Company </td></tr>
                <tr><th align="left">CompanyStatus</th><td>&nbsp;</td><td>Active </td></tr>
                <tr><th align="left">Type of accounts</th><td>&nbsp;</td><td>NO ACCOUNTS FILED </td></tr>
                </tbody></table>
            <div style="float:left;margin:5px;width:90%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
                <table width="100%">
                    <tbody><tr><td>Last update:</td><td> 2019-07-17 11:03:03</td></tr>

                    <tr><td><nobr>Primary Source:</nobr></td><td>Companies House			</td></tr>
                    </tbody></table>
            </div>
        </div>
        <div style="clear:both"></div>

    </div>

    <!-- Adverts -->



    <div class="enclosingBox">


        <div class="enclosingBox">
            <a href="#directors" id="directors"></a>
            <div class="heading2">Company Officers of {{ get_settings('web_title') }} LIMITED</div>
            <div id="infobox" style="float:left;margin:5px;width:95%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
                <div class="boxHeading">Current Directors</div>
                <div><table class="medTable"><tbody><tr><th>Officer </th><th>Role</th> <th> Date Appointed</th> </tr><tr itemprop="member" itemscope="" itemtype="http://schema.org/OrganizationRole">	<td><div><span itemprop="name">MAXIM LOUIS</span></div></td>
                            <td style="padding-left: 20px;"><span itemprop="roleName"><nobr>Director</nobr></span></td>
                            <td style="padding-left: 20px;"><span itemprop="startDate"><nobr>2015-01-20</nobr></span></td>
                        </tr></tbody></table></div>                </div>
            <div style="clear: both;"></div>
        </div><div style="clear: both;"></div>
    </div>



    <div class="enclosingBox">
        <a href="#fhistory" id="fhistory"></a>
        <div class="heading2">Corporation Filing History</div>
        <div style="float:left;margin:5px;width:95%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
            <div class="boxHeading">Companies House Filing History</div>
            <i>This is a record of the public documents (corporate filing) lodged from Companies House  where the company has filed annual returns and other statutory filing documents. Examples of documents filed include: change of registered office, accounts filing, director/officer appointments &amp; resignations, changes in share capital, shareholder members lists etc. </i><p>
            </p><table class="medTable"><tbody><tr><th>Date</th><th>Document Type</th><th>Document Description</th> </tr><tr><td><nobr>2018-03-06</nobr></td><td style="padding-left: 10px;">GAZ1</td><td style="padding-left: 5px;">FIRST GAZETTE</td></tr><tr><td><nobr>2016-12-12</nobr></td><td style="padding-left: 10px;">LATEST SOC</td><td style="padding-left: 5px;">12/12/16 STATEMENT OF CAPITAL;GBP 1</td></tr><tr><td><nobr>2016-12-12</nobr></td><td style="padding-left: 10px;">NEWINC</td><td style="padding-left: 5px;">CERTIFICATE OF INCORPORATION
                        GENERAL COMPANY DETAILS &amp; STATEMENTS OF;
                        OFFICERS, CAPITAL &amp; SHAREHOLDINGS, GUARANTEE, COMPLIANCE
                        MEMORANDUM OF ASSOCIATION </td></tr></tbody></table>                </div>
        <div style="clear: both;"></div>
    </div>

    <div class="enclosingBox">
        <div class="heading2">Industry Information</div>
        <div style="float:left;margin:5px;width:93%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
            <div class="boxHeading">SIC/NAIC Codes</div>
            <div>70 - Activities of head offices; management consultancy activities </div><div style="padding-left: 25px;">702 - Management consultancy activities </div><div style="padding-left: 60px;">70221 - Financial management </div><p> <br> <br> <br>					</p></div>

        <div style="clear: both;"></div>

    </div>






    <!-- Adverts -->









    <div class="enclosingBox">
        <div class="heading2">Income</div>
        <a href="#income" id="income"></a>
        <div style="float:left;margin:5px;width:95%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
            <div class="boxHeading">Government Income</div>
            We have not found government income sources for {{ get_settings('web_title') }} LIMITED. This could be because the transaction value was below £ 500 with local government or below £ 25,000 for central government. We have found 8,000 supplier to government that are UK companies so approx 0.2% of companies listed on Datalog supply to government.<p> The top companies supplying to UK government with the same SIC code (70221 - Financial management) as {{ get_settings('web_title') }} LIMITED are:</p><p> </p><table class="smallTable"></table>                </div>
        <div style="clear: both;"></div>		<div style="clear: both;"></div>
    </div>

    <div class="enclosingBox">
        <a href="#outgoings" id="outgoings"></a>
        <div class="heading2">Outgoings</div>
        <div style="float:left;margin:5px;width:95%;padding:10px;background:#fbfbfb;border:1px solid #dbdbdb">
            <div class="boxHeading">Business Rates/Property Tax</div>
            No properties were found where {{ get_settings('web_title') }} LIMITED is liable for the business rates / property tax. This could be for a number of reasons.<ul><li> The council hasnt published the data </li><li>We havent found or been able to process the councils data </li><li>The company is part of a group of companies and another company in the group is liable for business rates </li><li>The registered office may be a residential address which does not have a commercial designation. If the business is run from home then it won't be a commercial property and hence won't be liable for business rates. </li><li>Serviced offices are increasingly popular and therefore a business may not be paying business rates directly - the building owner is and this is incorporated in the office rental charge.</li></ul>                </div>
        <div style="clear: both;"></div>
    </div>














    <script type="text/javascript">
        BuildMenu();
    </script>




</div></div></div>
</div></div>
</section>


<!-- Section Contact Start -->
<section id="contact-section" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="contact-right-area">
                    <h2 class="title-">Get In Touch</h2>
                    <p>If you are interested in working with us, <br> please get in touch.</p>
                    <div class="contact-right">
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <p>1 Croft Court Plumpton Close, Whitehills Business Park, Blackpool, England, FY4 5PR </p>
                        </div>
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <p><a href="#">{{ get_settings('official_email') }}</a></p>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="col-lg-7 col-md-6 form-line">
                <h2>FeedBack</h2>
                <form method="post" action="" name="contact-form" data-toggle="validator">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="fname" placeholder="Your name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="msg_subject" name="subject" placeholder="Subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" required data-error="Write your message"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn btn-common" id="form-submit" name="send"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Section Contact End -->

<!-- Map Section Start -->
<section id="google-map-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="conatiner-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2357.0344003744294!2d-2.990886034144828!3d53.78887528007421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle%20map%20for%201%20Croft%20Court%20Plumpton%20Close%2C%20Whitehills%20Business%20Park%2C%20Blackpool%2C%20England%2C%20FY4%205PR!5e0!3m2!1sen!2sng!4v1605193226946!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection