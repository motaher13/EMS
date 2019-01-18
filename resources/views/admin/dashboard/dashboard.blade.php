@extends("layouts.app")

@section('content')
    {{--<div class="container" style="text-align: center;margin-top: 30px;">--}}
    {{--<div class="container" style="text-align: left;">--}}
    {{--<h2>Create Course</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="row" style="width: 95%;margin:auto;">
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        {{--<div class="portlet-title tabbable-line">--}}
                        {{--<div class="caption caption-md">--}}
                        {{--<i class="icon-globe theme-font hide"></i>--}}
                        {{--<span class="caption-subject font-blue-madison bold uppercase">Provide MCQ Data</span>--}}
                        {{--</div>--}}
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase">Recent Posts</span>
                                    </div>
                                </div>
                                {{--<div class="col-md-6">--}}
                                {{--<div class="btn-group pull-right" style="margin-left: 5px;">--}}
                                {{--<a class="btn sbold green" id="sample_editable_1_new" href="{{ route('course.list') }}" >old Questions </a>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                            </div>
                        </div>

                        {{--</div>--}}
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" >
                                    <div class="table-responsive" style="margin: 10px 20px;">
                                        <table class="table table-striped">
                                            <tbody >
                                            {{--@foreach($exams as $exam)--}}
                                                <tr class='clickable-row' data-href='#'>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="media-meta pull-right"></span>
                                                                <h4 class="title">
                                                                    Mehadi Hasan
                                                                    <span class="pull-right pagado">CSE-203C</span>
                                                                </h4>
                                                                <p class="summary">Solution</p>
                                                                <div style="width: 800px;">
                                                                    <h1><img alt="Saturn V carrying Apollo 11" src="https://i.ibb.co/pQQccCP/sample.jpg" style="float:right" /> Exam Writing Tips</h1>

                                                                    <p>This is what it all comes down to; you&rsquo;re sitting in the exam hall, waiting to get your hands on that anticipated piece of paper. You&rsquo;ve jammed a ton of information into your brain and your fingernails are non-existent &ndash; it&rsquo;s time to get down to business! Yes the exam environment may be different across disciplines. Computing students will sit some tests in front of a computer with their fingers poised to code. A practical element will contribute to science student&rsquo;s final grade. It doesn&rsquo;t matter if you&rsquo;re studying English, Economics, Psychology or History, every exam can be approached in much the same way with these exam writing tips.</p>

                                                                    <h2>How&nbsp;to write in exams&nbsp;<a id="quotes" name="quotes"></a></h2>

                                                                    <p>There really is no better way to get exam ready than by attempting past papers. Most exam bodies should have past papers available online but your teacher will get you started on these in class.</p>

                                                                    <p>This process isn&rsquo;t just about preparing an answer for a specific question, it&rsquo;s about&nbsp;<strong>understanding how you approach a question</strong>&nbsp;in an exam, how to structure your answer, the timings you should assign and what information will get marks.</p>

                                                                    <blockquote>
                                                                        <p>One small step for [a] man, one giant leap for mankind.&nbsp;<img alt="yes" src="https://cdn.ckeditor.com/4.6.0/full-all/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" /></p>
                                                                    </blockquote>

                                                                    <p>If you want to create an easy way to test yourself with past papers, try the GoConqr online quiz maker:</p>

                                                                    <blockquote>
                                                                        <p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>
                                                                    </blockquote>

                                                                    <h2><strong>Read All Questions Carefully</strong> <a id="tech-details" name="tech-details"></a></h2>

                                                                    <table align="right" border="1" bordercolor="#ccc" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
                                                                        <caption><strong>Mission crew</strong></caption>
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" style="background-color:#dddddd">Position</th>
                                                                            <th scope="col" style="background-color:#dddddd">Astronaut</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Commander</td>
                                                                            <td style="text-align:center">Neil A. Armstrong</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Command Module Pilot</td>
                                                                            <td style="text-align:center">Michael Collins</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Lunar Module Pilot</td>
                                                                            <td style="text-align:center">Edwin &quot;Buzz&quot; E. Aldrin, Jr.</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>

                                                                    <p>The stress of the situation can cause you to misread a question, plan your answer out, start writing your response and then realise you made a mistake and wasted vital time. Even though you generally won&rsquo;t be writing answers to every question on the paper, reading all questions thoroughly will&nbsp;<strong>ensure you make the right choices</strong>&nbsp;and can highlight how much you know about the topic.</p>

                                                                    <hr />
                                                                    <p><small>Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a></small></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            {{--@endforeach--}}
                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">Shariful Islam</span>
                                                            <h4 class="title">
                                                                Shariful Islam
                                                            </h4>
                                                            <p class="summary">Editorial</p>

                                                            <div style="width: 800px;">
                                                                <h1>Content Accessibility Matters</h1>

                                                                <p><img src="https://i.ibb.co/T4SZ1Gm/IMG-20150212-101041.jpg" style="float:right;width: 300px;" /> As the creators of a highly popular WYSIWYG rich text editor,&nbsp;<a href="https://cksource.com/">CKSource</a>&nbsp;is no stranger to web standards.&nbsp;<a href="https://ckeditor.com/ckeditor-4/">CKEditor</a>&nbsp;is responsible for producing a good part of the HTML content online so it must always generate semantic markup. Web standards are what keep the Internet from chaos and accessibility plays an important role in defining how the Web is shaped. CKSource is proud of being fully committed to the cause and thus&nbsp;CKEditor complies with most important industry standards, recommendations and checklists, including:</p>

                                                                <ul>
                                                                    <li><a href="http://www.w3.org/WAI/intro/wcag.php">Web Content Accessibility Guidelines (WCAG 2.0)</a></li>
                                                                    <li><a href="http://www.state.gov/m/irm/impact/c32157.htm">Section 508 Amendment to the Rehabilitation Act of 1973</a></li>
                                                                    <li><a href="http://www.w3.org/WAI/intro/aria.php">WAI-ARIA</a></li>
                                                                    <li><a href="http://www-03.ibm.com/able/guidelines/web/accessweb.html">IBM Web Accessibility Checklist</a></li>
                                                                </ul>

                                                                <p>It also includes a <a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_a11y">number of features</a> that make it easy to use with assistive technologies, such as intuitive <a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_shortcuts">keyboard navigation</a> or WAI-ARIA based user interface.</p>

                                                                <p><strong>Accessibility Checker Is Here!</strong></p>

                                                                <p>Accessibility Checker is an innovative solution that lets you&nbsp;<strong>inspect the accessibility level</strong>&nbsp;of content created in CKEditor and&nbsp;<strong>immediately solve</strong>&nbsp;any accessibility issues that are found.</p>

                                                                <p>It is built upon three key elements:</p>

                                                                <p>1) <strong>Intuitive user interface</strong> optimized for quick problem solving.<br />
                                                                    2) Flexibility allowing you to use the <strong>accessibility checking engine</strong> of your choice.<br />
                                                                    3) <strong>Quick Fix</strong> feature letting you fix common problems fully automatically.</p>

                                                                <p>All of this comes bundled with a tight integration with CKEditor.</p>

                                                                <h3>Usage Instructions</h3>

                                                                <p>You can enable Accessibility Checker by clicking the&nbsp;<strong>Check Accessibility</strong>&nbsp;(<img alt="a11ychecker.png" src="assets/accessibilitychecker/a11ychecker.png" />) toolbar button. Once the button is clicked, Accessibility Checker will perform the content checking process. Typically it takes a fraction of a second. Depending on the result, Accessibility Checker will switch to&nbsp;<strong>checking mode</strong>&nbsp;or inform you that the document contains no accessibility issues. If any issues are found, use the Accessbility Checker panel to investigate and fix them - often with one click of a button!</p>

                                                                <h2>Keyboard Shortcuts</h2>

                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>Command</td>
                                                                        <td>Keystroke</td>
                                                                        <td>Restrictions</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Open or close Accessibility Checker</td>
                                                                        <td><kbd>Ctrl+Alt+E</kbd></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Next issue</td>
                                                                        <td><kbd>Ctrl+E</kbd></td>
                                                                        <td>Checking mode only</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Previous issue</td>
                                                                        <td><kbd>Ctrl+Shift+E</kbd></td>
                                                                        <td>Checking mode only</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Close Accessibility Checker</td>
                                                                        <td><kbd>Esc</kbd></td>
                                                                        <td>&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Switch to listening mode</td>
                                                                        <td><kbd>Shift+Esc</kbd></td>
                                                                        <td>Checking mode only</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Switch to checking mode</td>
                                                                        <td><kbd>Shift+Esc</kbd></td>
                                                                        <td>Listening mode only</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <h2>Additional Information</h2>

                                                                <p>Read the <a href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_accessibility_checker.html">documentation</a>, try out this sample and visit <a href="https://ckeditor.com/docs/ckeditor4/latest/examples/accessibilitychecker.html">Accessibility Checker</a> <a href="https://ckeditor.com/docs/ckeditor4/latest/examples/accessibilitychecker.html">homepage</a> for more information.</p>

                                                                <p>Accessibility Checker is licensed under GPL or a commercial license. <a href="https://cksource.com/contact">Contact us</a> for more details!</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">asdfdasf</span>
                                                            <h4 class="title">
                                                                asdfas
                                                                <span class="pull-right pagado">afdasfsd</span>
                                                            </h4>
                                                            <span class="media-meta pull-right">asdfasfsa</span>
                                                            <p class="summary">111111</p>

                                                            <div style="width: 800px;">
                                                                <h2 style="text-align:center">The Flavorful Tuscany Meetup<img alt="Bilancino Hotel logo" src="https://i.ibb.co/8rX032V/bilancino-logo.png" style="float:right; height:75px; width:75px" /></h2>

                                                                <h3 style="text-align:center"><strong>Welcome letter</strong></h3>

                                                                <p>&nbsp;</p>

                                                                <p>Dear Guest,</p>

                                                                <p>We are delighted to welcome you to the annual <em>Flavorful Tuscany Meetup</em> and hope you will enjoy the programme as well as your stay at the Bilancino Hotel.</p>

                                                                <p>Please find below the full schedule of the event.</p>

                                                                <table cellpadding="15" cellspacing="0">
                                                                    <thead>
                                                                    <tr>
                                                                        <th colspan="2" scope="col">Saturday, July 14</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>9:30 AM - 11:30 AM</td>
                                                                        <td>Americano vs. Brewed - &ldquo;know your coffee&rdquo; session with <strong>Stefano Garau</strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1:00 PM - 3:00 PM</td>
                                                                        <td>Pappardelle al pomodoro - live cooking session with <strong>Rita Fresco</strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5:00 PM - 8:00 PM</td>
                                                                        <td>Tuscan vineyards at a glance - wine-tasting session with <strong>Frederico Riscoli</strong></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <blockquote>
                                                                    <p>The annual Flavorful Tuscany meetups are always a culinary discovery. You get the best of Tuscan flavors during an intense one-day stay at one of the top hotels of the region. All the sessions are lead by top chefs passionate about their profession. I would certainly recommend to save the date in your calendar for this one!</p>

                                                                    <p>Angelina Calvino, food journalist</p>
                                                                </blockquote>

                                                                <p>Please arrive at the Bilancino Hotel reception desk at least <strong>half an hour earlier</strong> to make sure that the registration process goes as smoothly as possible.</p>

                                                                <p>We look forward to welcoming you to the event.</p>

                                                                <p>Victoria Valc</p>

                                                                <p>Bilancino Hotel Event Manager</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">asdfdasf</span>
                                                            <h4 class="title">
                                                                asdfas
                                                                <span class="pull-right pagado">afdasfsd</span>
                                                            </h4>
                                                            <span class="media-meta pull-right">asdfasfsa</span>
                                                            <p class="summary">111111</p>

                                                            <div style="width: 800px;">
                                                                <h1 style="text-align:center"><span style="font-family:Georgia,serif"><span style="color:#006699">Recognition of Achievement</span></span></h1>

                                                                <p style="text-align:justify"><span style="font-family:Georgia,serif">This letter acknowledges the invaluable input <strong>you</strong>, as a member of our <em>Innovation Team</em>,&nbsp;have provided in the &ldquo;Implement Rich Text Editor&rdquo;&nbsp;project. The Management would like to hereby thank you for this great accomplishment that was delivered in a timely fashion, up to the highest company standards, and with great results:</span></p>

                                                                <table border="1" cellpadding="5" cellspacing="0" style="width:100%" summary="Project Schedule">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col" style="background-color:#cccccc"><span style="font-family:Georgia,serif">Project Phase</span></th>
                                                                        <th scope="col" style="background-color:#cccccc"><span style="font-family:Georgia,serif">Deadline</span></th>
                                                                        <th scope="col" style="background-color:#cccccc"><span style="font-family:Georgia,serif">Status</span></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td><span style="font-family:Georgia,serif">Phase 1: Market research</span></td>
                                                                        <td style="text-align:center"><span style="font-family:Georgia,serif">2016-10-15</span></td>
                                                                        <td style="text-align:center"><span style="font-family:Georgia,serif"><span style="color:#19b159">✓</span></span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="background-color:#eeeeee"><span style="font-family:Georgia,serif">Phase 2: Editor implementation</span></td>
                                                                        <td style="background-color:#eeeeee; text-align:center"><span style="font-family:Georgia,serif">2016-10-20</span></td>
                                                                        <td style="background-color:#eeeeee; text-align:center"><span style="font-family:Georgia,serif"><span style="color:#19b159">✓</span></span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><span style="font-family:Georgia,serif">Phase 3: Rollout to Production</span></td>
                                                                        <td style="text-align:center"><span style="font-family:Georgia,serif">2016-10-22</span></td>
                                                                        <td style="text-align:center"><span style="font-family:Georgia,serif"><span style="color:#19b159">✓</span></span></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>

                                                                <p style="text-align:justify"><span style="font-family:Georgia,serif">The project that you participated in is of utmost importance to the future success of our platform. &nbsp;We are very proud to share that&nbsp;the&nbsp;CKEditor implementation was a huge success and brought congratulations from both the key Stakeholders and the Customers:</span></p>

                                                                <p style="text-align:center"><em><span style="font-family:Georgia,serif">This new editor has totally changed our content creation experience!</span></em></p>

                                                                <p style="text-align:center"><em><span style="font-family:Georgia,serif">&mdash; John F. Smith, CEO, The New Web</span></em></p>

                                                                <p style="text-align:justify"><span style="font-family:Georgia,serif">This letter recognizes that much of our success is directly attributable to your efforts.&nbsp;You deserve to be proud of your achievement. May your future efforts be equally successful and rewarding.</span></p>

                                                                <p style="text-align:justify"><span style="font-family:Georgia,serif">I am sure we will be seeing and hearing a great deal more about your accomplishments in the future. Keep up the good work!</span></p>

                                                                <p>&nbsp;</p>

                                                                <p><span style="font-family:Georgia,serif">Best regards,</span></p>

                                                                <p><span style="font-family:Georgia,serif"><em>The Management</em></span></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">asdfdasf</span>
                                                            <h4 class="title">
                                                                asdfas
                                                                <span class="pull-right pagado">afdasfsd</span>
                                                            </h4>
                                                            <span class="media-meta pull-right">asdfasfsa</span>
                                                            <p class="summary">111111</p>

                                                            <div style="width: 800px;">
                                                                <h1>Rosetta</h1>

                                                                <p><a href="http://en.wikipedia.org/wiki/File:Comet_67P_on_19_September_2014_NavCam_mosaic.jpg"><img alt="Comet 67P" src="https://i.ibb.co/YP0pTFt/comet-67p.jpg" style="float:right; height:239px; width:300px" /></a></p>

                                                                <p>Rosetta is a robotic space probe built and launched by the <a href="http://en.wikipedia.org/wiki/European_Space_Agency">European Space Agency</a>. Along with <a href="http://en.wikipedia.org/wiki/Philae_(spacecraft)">Philae</a>, its lander module, Rosetta is performing a detailed study of <a href="http://en.wikipedia.org/wiki/67P/Churyumov%E2%80%93Gerasimenko">comet 67P/Churyumov&ndash;Gerasimenko (67P)</a>. On 12 November 2014 the mission performed the first soft landing on a comet and returned data from the surface.</p>

                                                                <h2>Mission overview</h2>

                                                                <p>Rosetta was launched on 2 March 2004 on an <a href="http://en.wikipedia.org/wiki/Ariane_5">Ariane 5</a> rocket and reached the comet on 6 August 2014, becoming the first spacecraft to orbit a comet. (Previous missions had conducted successful flybys of seven other comets.) It is one of ESA&#39;s Horizon 2000 cornerstone missions. The spacecraft consists of the Rosetta orbiter, which features 12 instruments, and the Philae lander, with nine additional instruments. The Rosetta mission will orbit 67P for 17 months and is designed to complete the most detailed study of a comet ever attempted. The spacecraft is controlled from the <a href="http://en.wikipedia.org/wiki/European_Space_Operations_Centre">European Space Operations Centre</a> (ESOC), in Darmstadt, Germany. The planning for the operation of the scientific payload, together with the data retrieval, calibration, archiving and distribution, is performed from the <a href="http://en.wikipedia.org/wiki/European_Space_Astronomy_Centre">European Space Astronomy Centre</a> (ESAC), in Villanueva de la Ca&ntilde;ada, near Madrid, Spain. It has been estimated that in the decade preceding 2014, some 2,000 people assisted in the mission in some capacity.</p>

                                                                <p>The probe is named after the <a href="http://en.wikipedia.org/wiki/Rosetta_Stone">Rosetta Stone</a>, a stele of Egyptian origin featuring a decree in three scripts. The lander is named after the Philae obelisk, which bears a bilingual Greek and Egyptian hieroglyphic inscription. A comparison of its hieroglyphs with those on the Rosetta Stone catalysed the deciphering of the Egyptian writing system. Similarly, it is hoped that these spacecraft will result in better understanding of comets and the early Solar System. In a more direct analogy to its namesake, the Rosetta spacecraft also carries a micro-etched nickel alloy Rosetta disc donated by the Long Now Foundation inscribed with 13,000 pages of text in 1200 languages.</p>

                                                                <hr />
                                                                <p>Source: <a href="http://en.wikipedia.org/wiki/Rosetta_(spacecraft)">Wikipedia.org</a></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr class='clickable-row' data-href='#'>
                                                <td>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <span class="media-meta pull-right">asdfdasf</span>
                                                            <h4 class="title">
                                                                asdfas
                                                                <span class="pull-right pagado">afdasfsd</span>
                                                            </h4>
                                                            <span class="media-meta pull-right">asdfasfsa</span>
                                                            <p class="summary">111111</p>

                                                            <div style="width: 800px;">
                                                                <h1>Rosetta</h1>

                                                                <p>Rosetta is a robotic space probe built and launched by the <a href="http://en.wikipedia.org/wiki/European_Space_Agency">European Space Agency</a>. Along with <a href="http://en.wikipedia.org/wiki/Philae_(spacecraft)">Philae</a>, its lander module, Rosetta is performing a detailed study of <a href="http://en.wikipedia.org/wiki/67P/Churyumov%E2%80%93Gerasimenko">comet 67P/Churyumov&ndash;Gerasimenko (67P)</a>. On 12 November 2014 the mission performed the first soft landing on a comet and returned data from the surface.</p>

                                                                <h2>Mission overview</h2>

                                                                <div class="embed-360p" data-oembed-url="https://www.youtube.com/watch?v=cArihDTnOZg">
                                                                    <div style="left: 0px; width: 100%; height: 0px; position: relative; padding-bottom: 56.2493%;"><iframe allowfullscreen="true" frameborder="0" mozallowfullscreen="true" src="https://www.youtube.com/embed/cArihDTnOZg?wmode=transparent&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;enablejsapi=1" style="top: 0px; left: 0px; width: 100%; height: 100%; position: absolute;" webkitallowfullscreen="true"></iframe></div>
                                                                </div>

                                                                <p>Rosetta was launched on 2 March 2004 on an <a href="http://en.wikipedia.org/wiki/Ariane_5">Ariane 5</a> rocket and reached the comet on 6 August 2014, becoming the first spacecraft to orbit a comet. (Previous missions had conducted successful flybys of seven other comets.) It is one of ESA&#39;s Horizon 2000 cornerstone missions. The spacecraft consists of the Rosetta orbiter, which features 12 instruments, and the Philae lander, with nine additional instruments. The Rosetta mission will orbit 67P for 17 months and is designed to complete the most detailed study of a comet ever attempted. The spacecraft is controlled from the <a href="http://en.wikipedia.org/wiki/European_Space_Operations_Centre">European Space Operations Centre</a> (ESOC), in Darmstadt, Germany. The planning for the operation of the scientific payload, together with the data retrieval, calibration, archiving and distribution, is performed from the <a href="http://en.wikipedia.org/wiki/European_Space_Astronomy_Centre">European Space Astronomy Centre</a> (ESAC), in Villanueva de la Ca&ntilde;ada, near Madrid, Spain. It has been estimated that in the decade preceding 2014, some 2,000 people assisted in the mission in some capacity.</p>

                                                                <figure class="image image-align-right"><a href="http://en.wikipedia.org/wiki/File:Comet_67P_on_19_September_2014_NavCam_mosaic.jpg"><img alt="Comet 67P" height="900" src="assets/comet-67p.jpg" width="1131" /></a>

                                                                    <figcaption>Comet 67P in September 2014</figcaption>
                                                                </figure>

                                                                <p>The probe is named after the <a href="http://en.wikipedia.org/wiki/Rosetta_Stone">Rosetta Stone</a>, a stele of Egyptian origin featuring a decree in three scripts. The lander is named after the Philae obelisk, which bears a bilingual Greek and Egyptian hieroglyphic inscription. A comparison of its hieroglyphs with those on the Rosetta Stone catalysed the deciphering of the Egyptian writing system. Similarly, it is hoped that these spacecraft will result in better understanding of comets and the early Solar System. In a more direct analogy to its namesake, the Rosetta spacecraft also carries a micro-etched nickel alloy Rosetta disc donated by the Long Now Foundation inscribed with 13,000 pages of text in 1200 languages.</p>

                                                                <p>The spacecraft performed two asteroid flyby missions on its way to the comet. In 2007, Rosetta also performed a Mars swing-by (flyby). The craft completed its flyby of asteroid 2867 &Scaron;teins in September 2008 and of 21 Lutetia in July 2010. On 20 January 2014, Rosetta was taken out of a 31-month hibernation mode as it approached the comet.</p>

                                                                <p>Rosetta&#39;s Philae lander successfully made the first soft landing on a comet nucleus when it touched down on 67P on 12 November 2014. Astrophysicist Elizabeth Pearson said that although the future of the lander Philae is uncertain, Rosetta is the workhorse of the mission and its work will carry on.</p>

                                                                <h2>Media coverage</h2>

                                                                <p>The entire mission was featured heavily in social media, with a <a href="http://en.wikipedia.org/wiki/Facebook">Facebook</a> account for the mission and both the satellite and the lander having an official <a href="http://en.wikipedia.org/wiki/Twitter">Twitter</a> account portraying a <a href="http://en.wikipedia.org/wiki/Anthropomorphism">personification</a> of both spacecraft. The <a href="http://en.wikipedia.org/wiki/Hashtag">hashtag</a> &quot;#CometLanding&quot; gained widespread traction. A <a href="http://en.wikipedia.org/wiki/Livestream">Livestream</a> of the control centres was set up, as were multiple official and unofficial events around the world to follow Philae&#39;s landing on 67P.</p>

                                                                <p>The landing was reported live on <a href="https://twitter.com/Philae2014">Philae&#39;s</a> Twitter account:</p>

                                                                <div data-oembed-url="https://twitter.com/Philae2014/status/532494857710075905">
                                                                    <blockquote align="center" class="twitter-tweet">
                                                                        <p>Finally! I&rsquo;m stretching my legs after more than 10 years. Landing gear deployed! <a href="https://twitter.com/hashtag/CometLanding?src=hash">#CometLanding</a></p>
                                                                        &mdash; Philae Lander (@Philae2014) <a href="https://twitter.com/Philae2014/status/532494857710075905">November 12, 2014</a></blockquote>
                                                                    <script async charset="utf-8" src="//platform.twitter.com/widgets.js"></script></div>

                                                                <div data-oembed-url="https://twitter.com/Philae2014/status/532547743206875136">
                                                                    <blockquote align="center" class="twitter-tweet">
                                                                        <p>It&rsquo;s me&hellip; landing on a comet &amp; feeling good! MT <a href="https://twitter.com/ESA_Rosetta">@ESA_Rosetta</a>: I see you too! <a href="https://twitter.com/hashtag/CometLanding?src=hash">#CometLanding</a> <a href="http://t.co/DjU0J1Ey4H">pic.twitter.com/DjU0J1Ey4H</a></p>
                                                                        &mdash; Philae Lander (@Philae2014) <a href="https://twitter.com/Philae2014/status/532547743206875136">November 12, 2014</a></blockquote>
                                                                    <script async charset="utf-8" src="//platform.twitter.com/widgets.js"></script></div>

                                                                <div data-oembed-url="https://twitter.com/Philae2014/status/532564514051735552">
                                                                    <blockquote align="center" class="twitter-tweet">
                                                                        <p>Touchdown! My new address: 67P! <a href="https://twitter.com/hashtag/CometLanding?src=hash">#CometLanding</a></p>
                                                                        &mdash; Philae Lander (@Philae2014) <a href="https://twitter.com/Philae2014/status/532564514051735552">November 12, 2014</a></blockquote>
                                                                    <script async charset="utf-8" src="//platform.twitter.com/widgets.js"></script></div>

                                                                <hr />
                                                                <p>Source: <a href="http://en.wikipedia.org/wiki/Rosetta_(spacecraft)">Wikipedia.org</a></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            {{--</tr><tr class='clickable-row' data-href='#'>--}}
                                                {{--<td>--}}
                                                    {{--<div class="media">--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<span class="media-meta pull-right">asdfdasf</span>--}}
                                                            {{--<h4 class="title">--}}
                                                                {{--asdfas--}}
                                                                {{--<span class="pull-right pagado">afdasfsd</span>--}}
                                                            {{--</h4>--}}
                                                            {{--<span class="media-meta pull-right">asdfasfsa</span>--}}
                                                            {{--<p class="summary">111111</p>--}}

                                                            {{--<div style="width: 800px;">--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}
                                            {{--</tr><tr class='clickable-row'>--}}
                                                {{--<td>--}}
                                                    {{--<div class="media">--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<span class="media-meta pull-right">asdfdasf</span>--}}
                                                            {{--<h4 class="title">--}}
                                                                {{--asdfas--}}
                                                                {{--<span class="pull-right pagado">afdasfsd</span>--}}
                                                            {{--</h4>--}}
                                                            {{--<span class="media-meta pull-right">asdfasfsa</span>--}}
                                                            {{--<p class="summary">111111</p>--}}

                                                            {{--<div style="width: 800px;">--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}
                                            {{--</tr><tr class='clickable-row' >--}}
                                                {{--<td>--}}
                                                    {{--<div class="media">--}}
                                                        {{--<div class="media-body">--}}
                                                            {{--<span class="media-meta pull-right">asdfdasf</span>--}}
                                                            {{--<h4 class="title">--}}
                                                                {{--asdfas--}}
                                                                {{--<span class="pull-right pagado">afdasfsd</span>--}}
                                                            {{--</h4>--}}
                                                            {{--<span class="media-meta pull-right">asdfasfsa</span>--}}
                                                            {{--<p class="summary">111111</p>--}}

                                                            {{--<div style="width: 800px;">--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- END PERSONAL INFO TAB -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>


@endsection

@section('scripts')
    <script>
        // $( document ).ready(function() {
        //     $(".clickable-row").click(function() {
        //         window.location = $(this).data("href");
        //     });
        // });

    </script>
@endsection

@section('styles')

    <style>
        .media-meta {
            font-size: 11px;
            color: #999;
        }
        .media .title {
            color: #2BBCDE;
            font-size: 18px;
            font-weight: bold;
            line-height: normal;
            margin: 0;
        }
        .media .title span {
            font-size: .8em;
            margin-right: 20px;
        }
        .media .title span.pagado {
            color: #5cb85c;
        }
        .media .summary {
            font-size: 14px;
        }
        p{
            margin: 0px;
        }
    </style>

@endsection