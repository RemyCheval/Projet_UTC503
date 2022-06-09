<?php 
  include("include/header.php"); 
?>
<style type="text/css">

    .tableau{
        width: 70%;
        margin: auto;
    }

    .content-table{
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 1.5em;
        min-width: 400px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0.15);
    }

    .content-table thead tr{
        background-color: #009879;
        color: #FFF;
        text-align: left;
        font-weight: bold;
    }

    .content-table th
    .content-table td{
        padding: 12px 15px;
    }

    .content-table tbody tr{
        border-bottom: 1px solid #dddddd;
    }

    .content-table tbody tr:nth-of-type(even){
        background-color: #f3f3f3;
    }

    .content-table tbody tr:last-of-type{
        border-bottom: 2px solid #009879;
    }

    .content-table tbody tr:active-row{
        font-weight: bold;
        color: #009879;
    }


    
</style>
<br>
<br>
<div class="tableau">
<table class="content-table">
    <thead>
        <tr>
            <th>Classement</th>
            <th>Equipe</th>
            <th>MJ</th>
            <th>G</th>
            <th>N</th>
            <th>P</th>
            <th>Buts</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active-row">
            <td>1</td>
            <td>Paris</td>
            <td>38</td>
            <td>26</td>
            <td>8</td>
            <td>4</td>
            <td>90:36</td>
            <td>86</td>
        </tr>
        <tr class="active-row">
            <td>2</td>
            <td>Marseille</td>
            <td>38</td>
            <td>21</td>
            <td>8</td>
            <td>9</td>
            <td>63:38</td>
            <td>71</td>
        </tr>
        <tr class="active-row">
            <td>3</td>
            <td>Monaco</td>
            <td>38</td>
            <td>20</td>
            <td>9</td>
            <td>9</td>
            <td>65:40</td>
            <td>69</td>
        </tr>
        <tr class="active-row">
            <td>4</td>
            <td>Rennes</td>
            <td>38</td>
            <td>20</td>
            <td>6</td>
            <td>12</td>
            <td>82:40</td>
            <td>66</td>
        </tr>
        <tr class="active-row">
            <td>5</td>
            <td>Nice</td>
            <td>38</td>
            <td>20</td>
            <td>7</td>
            <td>11</td>
            <td>52:36</td>
            <td>66</td>
        </tr>
        <tr class="active-row">
            <td>6</td>
            <td>Strasbourg</td>
            <td>38</td>
            <td>17</td>
            <td>12</td>
            <td>9</td>
            <td>60:43</td>
            <td>63</td>
        </tr>
        <tr class="active-row">
            <td>7</td>
            <td>Lens</td>
            <td>38</td>
            <td>17</td>
            <td>11</td>
            <td>10</td>
            <td>62: 48</td>
            <td>62</td>
        </tr>
        <tr class="active-row">
            <td>8</td>
            <td>Lyon</td>
            <td>38</td>
            <td>17</td>
            <td>11</td>
            <td>10</td>
            <td>66:51</td>
            <td>61</td>
        </tr>
        <tr class="active-row">
            <td>9</td>
            <td>Nantes</td>
            <td>38</td>
            <td>15</td>
            <td>10</td>
            <td>13</td>
            <td>55:48</td>
            <td>55</td>
        </tr>
        <tr class="active-row">
            <td>10</td>
            <td>Lille</td>
            <td>38</td>
            <td>14</td>
            <td>13</td>
            <td>11</td>
            <td>48:48</td>
            <td>55</td>
        </tr>
        <tr class="active-row">
            <td>11</td>
            <td>Brest</td>
            <td>38</td>
            <td>13</td>
            <td>9</td>
            <td>16</td>
            <td>49:57</td>
            <td>48</td>
        </tr>
        <tr class="active-row">
            <td>12</td>
            <td>Reims</td>
            <td>38</td>
            <td>11</td>
            <td>13</td>
            <td>14</td>
            <td>43:44</td>
            <td>46</td>
        </tr>
        <tr class="active-row">
            <td>13</td>
            <td>Montpellier</td>
            <td>38</td>
            <td>12</td>
            <td>7</td>
            <td>19</td>
            <td>49:61</td>
            <td>43</td>
        </tr>
        <tr class="active-row">
            <td>14</td>
            <td>Anger</td>
            <td>38</td>
            <td>10</td>
            <td>11</td>
            <td>17</td>
            <td>44:55</td>
            <td>41</td>
        </tr>
        <tr class="active-row">
            <td>15</td>
            <td>Troyes</td>
            <td>38</td>
            <td>9</td>
            <td>11</td>
            <td>18</td>
            <td>37:53</td>
            <td>38</td>
        </tr>
        <tr class="active-row">
            <td>16</td>
            <td>Lorient</td>
            <td>38</td>
            <td>8</td>
            <td>12</td>
            <td>18</td>
            <td>35:63</td>
            <td>36</td>
        </tr>
        <tr class="active-row">
            <td>17</td>
            <td>Clermont</td>
            <td>38</td>
            <td>9</td>
            <td>9</td>
            <td>20</td>
            <td>38:69</td>
            <td>36</td>
        </tr>
        <tr class="active-row">
            <td>18</td>
            <td>Saint-Etienne</td>
            <td>38</td>
            <td>7</td>
            <td>11</td>
            <td>20</td>
            <td>42:77</td>
            <td>32</td>
        </tr>
        <tr class="active-row">
            <td>19</td>
            <td>Metz</td>
            <td>38</td>
            <td>6</td>
            <td>13</td>
            <td>19</td>
            <td>35:69</td>
            <td>31</td>
        </tr>
        <tr class="active-row">
            <td>20</td>
            <td>Bordeaux</td>
            <td>38</td>
            <td>6</td>
            <td>13</td>
            <td>19</td>
            <td>52:91</td>
            <td>31</td>
        </tr>
    </tbody>
</table>
</div>


<?php 
  include("include/footer.php"); 
?>
