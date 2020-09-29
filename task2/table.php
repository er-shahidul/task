<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery.min.js"></script>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 90%;
            margin: auto;
        }
        .logoPosition{
            float: left;
            padding-top: 5px;
            padding-bottom: 2px;
            margin-left: 5%;
        }
        .logo{
            height: 51px;
            width: 121px;
        }
        .exportBtnPosition{
            padding-top: 28px;
            padding-bottom: 2px;
            padding-right: 5%;
            float: right;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 5px;
        }
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th {
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".exportToPdf").click(function(){
                window.location.href = 'htmlToPdf.php';
            });
        });
    </script>
</head>
<div class="exportBtnPosition">
    <button type="button" class="exportToPdf" style="background: url(img/exportToPdfBtn.png);width: 153px;height: 35px;"></button>
</div>
<body>

<div class="logoPosition">
    <img src="img/logo.png" class="logo" alt="CompanyLogo"/>
</div>

<table id="customers">
    <thead>
    <tr>
        <th>ID</th>
        <th>Order ID</th>
        <th>Country</th>
        <th>Ship City</th>
        <th>Ship Address</th>
        <th>Company Agent</th>
        <th>Ship Date</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>61715-075</td>
        <td>China</td>
        <td>Tieba</td>
        <td>746 Pine View Junction</td>
        <td>Nixie Sailor</td>
        <td>2/12/2018</td>
    </tr>
    <tr>
        <td>2</td>
        <td>63629-4697</td>
        <td>Indonesia</td>
        <td>Cihaur</td>
        <td>01652 Fulton Trail</td>
        <td>Emelita Giraldez</td>
        <td>8/6/2017</td>
    </tr>
    <tr>
        <td>3</td>
        <td>68084-123</td>
        <td>Argentina</td>
        <td>Puerto Iguazú</td>
        <td>2 Pine View Park</td>
        <td>Ula Luckin</td>
        <td>5/26/2016</td>
    </tr>
    <tr>
        <td>4</td>
        <td>67457-428</td>
        <td>Indonesia</td>
        <td>Talok</td>
        <td>3050 Buell Terrace</td>
        <td>Evangeline Cure</td>
        <td>7/2/2016</td>
    </tr>
    <tr>
        <td>5</td>
        <td>31722-529</td>
        <td>Austria</td>
        <td>Sankt Andrä-Höch</td>
        <td>3038 Trailsway Junction</td>
        <td>Tierney St. Louis</td>
        <td>5/20/2017</td>
    </tr>
    <tr>
        <td>6</td>
        <td>64117-168</td>
        <td>China</td>
        <td>Rongkou</td>
        <td>023 South Way</td>
        <td>Gerhard Reinhard</td>
        <td>11/26/2016</td>
    </tr>
    <tr>
        <td>7</td>
        <td>43857-0331</td>
        <td>China</td>
        <td>Baiguo</td>
        <td>56482 Fairfield Terrace</td>
        <td>Englebert Shelley</td>
        <td>6/28/2016</td>
    </tr>
    <tr>
        <td>8</td>
        <td>64980-196</td>
        <td>Croatia</td>
        <td>Vinica</td>
        <td>0 Elka Street</td>
        <td>Hazlett Kite</td>
        <td>8/5/2016</td>
    </tr>
    <tr>
        <td>9</td>
        <td>0404-0360</td>
        <td>Colombia</td>
        <td>San Carlos</td>
        <td>38099 Ilene Hill</td>
        <td>Freida Morby</td>
        <td>3/31/2017</td>
    </tr>
    <tr>
        <td>10</td>
        <td>52125-267</td>
        <td>Thailand</td>
        <td>Maha Sarakham</td>
        <td>8696 Barby Pass</td>
        <td>Obed Helian</td>
        <td>1/26/2017</td>
    </tr>
    <tr>
        <td>11</td>
        <td>54092-515</td>
        <td>Brazil</td>
        <td>Canguaretama</td>
        <td>32461 Ridgeway Alley</td>
        <td>Sibyl Amy</td>
        <td>3/8/2017</td>
    </tr>
    <tr>
        <td>12</td>
        <td>0185-0130</td>
        <td>China</td>
        <td>Jiamachi</td>
        <td>23 Walton Pass</td>
        <td>Norri Foldes</td>
        <td>4/2/2017</td>
    </tr>
    <tr>
        <td>13</td>
        <td>21130-678</td>
        <td>China</td>
        <td>Qiaole</td>
        <td>328 Glendale Hill</td>
        <td>Myrna Orhtmann</td>
        <td>6/7/2016</td>
    </tr>
    <tr>
        <td>14</td>
        <td>40076-953</td>
        <td>Portugal</td>
        <td>Burgau</td>
        <td>52550 Crownhardt Court</td>
        <td>Sioux Kneath</td>
        <td>10/11/2017</td>
    </tr>
    <tr>
        <td>15</td>
        <td>36987-3005</td>
        <td>Portugal</td>
        <td>Bacelo</td>
        <td>548 Morrow Terrace</td>
        <td>Christa Jacmar</td>
        <td>8/17/2017</td>
    </tr>
    <tr>
        <td>16</td>
        <td>67510-0062</td>
        <td>South Africa</td>
        <td>Pongola</td>
        <td>02534 Hauk Trail</td>
        <td>Shandee Goracci</td>
        <td>7/24/2016</td>
    </tr>
    </tbody>
</table>
</body>

</html>
