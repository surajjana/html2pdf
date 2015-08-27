<?php
    $content = '
<page>
    <table border="0.5" cellpadding="0" cellspacing="0" align="center" style="margin-top:50px;">
    <tr>
    	<th>
    		<table>
    			<tr><th style="font-size:24px;">SURAJ KUMAR JANA</th></tr>
    			<tr><th>surajjana2@gmail.com</th></tr>
    			<tr><th>+91-8553236639</th></tr>
    		</table>
    	</th>
    	<th style="font-size:24px;padding-left:15px;padding-right:15px;text-align:center;">COMPUTER SCIENCE<br /> AND<br /> ENGINEERING</th>
    	<th><img src="logo.png" /></th>
    </tr>
    </table>

    <br />

    <p style="font-size:14px;"><b>Career Objective :</b></p>
    
    <p style="margin-left:50px;margin-right:40px;">To make a sound position in corporate world and work enthusiastically in team to achieve goal of the
organization with devotion and hard work.To seek challenging assignment and responsibility, with an opportunity for
growth and career advancement as successful achievements.</p>

    <p style="font-size:14px;"><b>Academics :</b></p>

    <table border="0.5" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <th style="padding-left:5px;padding-right:5px;">Sl. No.</th>
            <th style="padding-left:5px;padding-right:5px;">Qualification</th>
            <th style="padding-left:5px;padding-right:5px;">Board</th>
            <th style="padding-left:5px;padding-right:5px;">College/School</th>
            <th style="padding-left:5px;padding-right:5px;">Year of Passing</th>
            <th style="padding-left:5px;padding-right:5px;">Marks Obtained (%)</th>
        </tr>
        <tr>
            <td style="padding-left:5px;padding-right:5px;">1. </td>
            <td style="padding-left:5px;padding-right:5px;">B.E</td>
            <td style="padding-left:5px;padding-right:5px;">VTU<sup>1</sup></td>
            <td style="padding-left:5px;padding-right:5px;">BMS Institute of Technology</td>
            <td style="padding-left:5px;padding-right:5px;">2016 (to be completed)</td>
            <td style="padding-left:5px;padding-right:5px;">76.92</td>
        </tr>
        <tr>
            <td style="padding-left:5px;padding-right:5px;">2. </td>
            <td style="padding-left:5px;padding-right:5px;">Class 12</td>
            <td style="padding-left:5px;padding-right:5px;">CBSE<sup>2</sup></td>
            <td style="padding-left:5px;padding-right:5px;">Kendriya Vidyalaya No.1, Jalahalli West</td>
            <td style="padding-left:5px;padding-right:5px;">2012</td>
            <td style="padding-left:5px;padding-right:5px;">89.4</td>
        </tr>
        <tr>
            <td style="padding-left:5px;padding-right:5px;">3. </td>
            <td style="padding-left:5px;padding-right:5px;">Claas 10</td>
            <td style="padding-left:5px;padding-right:5px;">CBSE<sup>2</sup></td>
            <td style="padding-left:5px;padding-right:5px;">Kendriya Vidyalaya No.1, Jalahalli West</td>
            <td style="padding-left:5px;padding-right:5px;">2010</td>
            <td style="padding-left:5px;padding-right:5px;">87.4</td>
        </tr>
    </table>
    <p style="margin-left:12px;">VTU<sup>1</sup> : Visvesvaraya Technological University</p>
    <p style="margin-left:12px;margin-top:0px;">CBSE<sup>2</sup> : Central Board Of Secondary Education</p>

    <p style="font-size:14px;"><b>Technical Skills :</b></p>

    <ol>
      <li><b>Languages :</b> C, C++, Python, UNIX Shell, PHP, JAVA, C#, R, Octave</li>
      <li><b>Databases :</b> MySQL, PostgreSQL</li>
      <li><b>Platforms :</b> Android</li>
      <li><b>Libraries :</b> OpenCV</li>
      <li><b>O/S :</b> Debian based Linux, Fedora, Windows</li>
    </ol>

    <p style="font-size:14px;"><b>Certifications :</b></p>

    <ol>
        <li>LFS101x: Introduction To Linux from Linux Foundation through edX.</li>
        <li>Introduction To Data Analysis Using R from Big Data University, IBM.</li>
        <li>Hadoop Fundamentals from Big Data University, IBM.</li>
        <li>MAS.S69x: Big Data and Social Physics from MITx through edX.</li>
        <li>15.390x: Entreprenuership:Who is your customer? from MITx through edX.</li>
        <li>CS1156x: Learning From Data,Machine Learning from Caltechx through edX.</li>
        <li>Microsoft Certification in Dot Net Technologies through NIIT.</li>
    </ol>

    <p style="font-size:14px;"><b>Technical Papers :</b></p>

    <ol>
        <li><b>“Artificial Intelligence Based Personal Assistance Bot For Automated Task Processing”</b>, presented at
NCECC 2013 (ISBN9 : 78-81-928203-6-1).</li>
        <li><b>“Using Improved Laser Spark Plugs To Improve Ignition Temperature Of IC Engines In Cold
Countries”</b>, published in Manthana 2014, BMSIT.</li>
    </ol>

    <p style="font-size:14px;"><b>Internships :</b></p>

    <ol>
        <li>Campus Ambassador, National Student Space Challenge</li>
        <li>Campus Ambassador, Internshala</li>
    </ol>

    <p style="font-size:14px;"><b>Achievements/Awards :</b></p>

    <ol>
        <li>Won NASA Space Apps Challenge 2014 from India in Best Use Of Hardware category.</li>
        <li>Qualified for Facebook Hackers Cup 2013 and 2014 till round 2.</li>
    </ol>



</page>';

    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>