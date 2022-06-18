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
        background-color: #58738E;
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

    .btnt{
        background: #58738E;
        text-decoration: none;
        border-radius: 4px;
        color: #FFF;
        text-align: center;
        width: 12%;
    }

</style>
<br> 
<br>
<h2 style="text-align: center;">Saison 2021-2022</h2>
<br>
<div style="text-align:center;">
  <form method="post">
    <input class="btnt" style="margin-left:20px; cursor: pointer;" type="submit" name="ligue1" value="Ligue 1">
    <input class="btnt" style="margin-left:20px; cursor: pointer;" type="submit" name="liga" value="Liga">
    <input class="btnt" style="margin-left:20px; cursor: pointer;" type="submit" name="seria" value="Serie A">
    <input class="btnt" style="margin-left:20px; cursor: pointer;" type="submit" name="premiereleague" value="Premiere League">
    <input class="btnt" style="margin-left:20px; cursor: pointer;" type="submit" name="bundesliga" value="Bundesliga">
  </form>
    <?php
        if(isset($_POST['ligue1'])){
    ?>
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
      }
      else{

      }
    ?>
    <?php
        if(isset($_POST['liga'])){
    ?>
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
            <td>Real Madrid</td>
            <td>38</td>
            <td>26</td>
            <td>8</td>
            <td>4</td>
            <td>80:31</td>
            <td>86</td>
        </tr>
        <tr class="active-row">
            <td>2</td>
            <td>FC Barcelone</td>
            <td>38</td>
            <td>21</td>
            <td>10</td>
            <td>7</td>
            <td>68:38</td>
            <td>73</td>
        </tr>
        <tr class="active-row">
            <td>3</td>
            <td>Atlético de Madrid</td>
            <td>38</td>
            <td>21</td>
            <td>8</td>
            <td>9</td>
            <td>65:43</td>
            <td>71</td>
        </tr>
        <tr class="active-row">
            <td>4</td>
            <td>Séville FC</td>
            <td>38</td>
            <td>18</td>
            <td>16</td>
            <td>4S</td>
            <td>53:30</td>
            <td>70</td>
        </tr>
        <tr class="active-row">
            <td>5</td>
            <td>Betis Séville</td>
            <td>38</td>
            <td>19</td>
            <td>8</td>
            <td>11</td>
            <td>62:40</td>
            <td>65</td>
        </tr>
        <tr class="active-row">
            <td>6</td>
            <td>Real Sociedad</td>
            <td>38</td>
            <td>17</td>
            <td>11</td>
            <td>10</td>
            <td>40:37</td>
            <td>62</td>
        </tr>
        <tr class="active-row">
            <td>7</td>
            <td>Villareal</td>
            <td>38</td>
            <td>16</td>
            <td>11</td>
            <td>11</td>
            <td>63:37</td>
            <td>59</td>
        </tr>
        <tr class="active-row">
            <td>8</td>
            <td>Athletic Bilbao</td>
            <td>38</td>
            <td>14</td>
            <td>13</td>
            <td>11</td>
            <td>43:36</td>
            <td>55</td>
        </tr>
        <tr class="active-row">
            <td>9</td>
            <td>Valence CF</td>
            <td>38</td>
            <td>11</td>
            <td>15</td>
            <td>12</td>
            <td>48:53</td>
            <td>48</td>
        </tr>
        <tr class="active-row">
            <td>10</td>
            <td>Osasuna</td>
            <td>38</td>
            <td>12</td>
            <td>11</td>
            <td>15</td>
            <td>37:51</td>
            <td>47</td>
        </tr>
        <tr class="active-row">
            <td>11</td>
            <td>Celta Vigo</td>
            <td>38</td>
            <td>12</td>
            <td>10</td>
            <td>16</td>
            <td>43:43</td>
            <td>46</td>
        </tr>
        <tr class="active-row">
            <td>12</td>
            <td>Rayo Vallecano</td>
            <td>38</td>
            <td>11</td>
            <td>9</td>
            <td>18</td>
            <td>39:50</td>
            <td>42</td>
        </tr>
        <tr class="active-row">
            <td>13</td>
            <td>Elche</td>
            <td>38</td>
            <td>11</td>
            <td>9</td>
            <td>18</td>
            <td>40:52</td>
            <td>42</td>
        </tr>
        <tr class="active-row">
            <td>14</td>
            <td>Espagnyol Barcelone</td>
            <td>38</td>
            <td>10</td>
            <td>12</td>
            <td>16</td>
            <td>40:53</td>
            <td>42</td>
        </tr>
        <tr class="active-row">
            <td>15</td>
            <td>Getafe</td>
            <td>38</td>
            <td>8</td>
            <td>15</td>
            <td>15</td>
            <td>33:41</td>
            <td>39</td>
        </tr>
        <tr class="active-row">
            <td>16</td>
            <td>Majorque</td>
            <td>38</td>
            <td>8</td>
            <td>9</td>
            <td>19</td>
            <td>36:63</td>
            <td>36</td>
        </tr>
        <tr class="active-row">
            <td>17</td>
            <td>Cadix</td>
            <td>38</td>
            <td>8</td>
            <td>15</td>
            <td>15</td>
            <td>35:51</td>
            <td>39</td>
        </tr>
        <tr class="active-row">
            <td>18</td>
            <td>Grenade CF</td>
            <td>38</td>
            <td>8</td>
            <td>14</td>
            <td>16</td>
            <td>44:61</td>
            <td>38</td>
        </tr>
        <tr class="active-row">
            <td>19</td>
            <td>Levante</td>
            <td>38</td>
            <td>8</td>
            <td>11</td>
            <td>19</td>
            <td>51:76</td>
            <td>35</td>
        </tr>
        <tr class="active-row">
            <td>20</td>
            <td>Alavés</td>
            <td>38</td>
            <td>8</td>
            <td>7</td>
            <td>23</td>
            <td>31:65</td>
            <td>31</td>
        </tr>
    </tbody>
</table>
</div>
    <?php
      }
      else{

      }
    ?>

    <?php
        if(isset($_POST['seria'])){
    ?>
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
            <td>AC Milan</td>
            <td>38</td>
            <td>26</td>
            <td>8</td>
            <td>4</td>
            <td>69:31</td>
            <td>86</td>
        </tr>
        <tr class="active-row">
            <td>2</td>
            <td>Inter Milan</td>
            <td>38</td>
            <td>25</td>
            <td>9</td>
            <td>4</td>
            <td>84:32</td>
            <td>84</td>
        </tr>
        <tr class="active-row">
            <td>3</td>
            <td>Naples</td>
            <td>38</td>
            <td>24</td>
            <td>7</td>
            <td>7</td>
            <td>74:31</td>
            <td>79</td>
        </tr>
        <tr class="active-row">
            <td>4</td>
            <td>Juventus Turin</td>
            <td>38</td>
            <td>20</td>
            <td>10</td>
            <td>8</td>
            <td>57:37</td>
            <td>70</td>
        </tr>
        <tr class="active-row">
            <td>5</td>
            <td>Lazio Rome</td>
            <td>38</td>
            <td>18</td>
            <td>10</td>
            <td>10</td>
            <td>77:58</td>
            <td>64</td>
        </tr>
        <tr class="active-row">
            <td>6</td>
            <td>AS Rome</td>
            <td>38</td>
            <td>18</td>
            <td>9</td>
            <td>11</td>
            <td>59:43</td>
            <td>63</td>
        </tr>
        <tr class="active-row">
            <td>7</td>
            <td>Fiorentina</td>
            <td>38</td>
            <td>19</td>
            <td>5</td>
            <td>14</td>
            <td>59:51</td>
            <td>62</td>
        </tr>
        <tr class="active-row">
            <td>8</td>
            <td>Atalanta Bergame</td>
            <td>38</td>
            <td>16</td>
            <td>11</td>
            <td>11</td>
            <td>65:48</td>
            <td>59</td>
        </tr>
        <tr class="active-row">
            <td>9</td>
            <td>Hellas Vérone</td>
            <td>38</td>
            <td>15</td>
            <td>10</td>
            <td>13</td>
            <td>65:59</td>
            <td>53</td>
        </tr>
        <tr class="active-row">
            <td>10</td>
            <td>Torino</td>
            <td>38</td>
            <td>13</td>
            <td>11</td>
            <td>14</td>
            <td>46:41</td>
            <td>50</td>
        </tr>
        <tr class="active-row">
            <td>11</td>
            <td>Sassuola</td>
            <td>38</td>
            <td>13</td>
            <td>11</td>
            <td>14</td>
            <td>64:66</td>
            <td>50</td>
        </tr>
        <tr class="active-row">
            <td>12</td>
            <td>Udinese</td>
            <td>38</td>
            <td>11</td>
            <td>14</td>
            <td>13</td>
            <td>61:58</td>
            <td>47</td>
        </tr>
        <tr class="active-row">
            <td>13</td>
            <td>Bologne</td>
            <td>38</td>
            <td>12</td>
            <td>10</td>
            <td>16</td>
            <td>44:55</td>
            <td>46</td>
        </tr>
        <tr class="active-row">
            <td>14</td>
            <td>Empoli</td>
            <td>38</td>
            <td>10</td>
            <td>11</td>
            <td>17</td>
            <td>50:70</td>
            <td>41</td>
        </tr>
        <tr class="active-row">
            <td>15</td>
            <td>Sampdoria Gênes</td>
            <td>38</td>
            <td>10</td>
            <td>6</td>
            <td>22</td>
            <td>46:63</td>
            <td>36</td>
        </tr>
        <tr class="active-row">
            <td>16</td>
            <td>La Spezia</td>
            <td>38</td>
            <td>10</td>
            <td>6</td>
            <td>22</td>
            <td>41:71</td>
            <td>36</td>
        </tr>
        <tr class="active-row">
            <td>17</td>
            <td>Salernitana</td>
            <td>38</td>
            <td>7</td>
            <td>10</td>
            <td>21</td>
            <td>33:78</td>
            <td>31</td>
        </tr>
        <tr class="active-row">
            <td>18</td>
            <td>Cagliari</td>
            <td>38</td>
            <td>6</td>
            <td>12</td>
            <td>20</td>
            <td>34:68</td>
            <td>30</td>
        </tr>
        <tr class="active-row">
            <td>19</td>
            <td>Genoa</td>
            <td>38</td>
            <td>4</td>
            <td>16</td>
            <td>18</td>
            <td>27:60</td>
            <td>28</td>
        </tr>
        <tr class="active-row">
            <td>20</td>
            <td>Venise</td>
            <td>38</td>
            <td>6</td>
            <td>9</td>
            <td>23</td>
            <td>34:69</td>
            <td>27</td>
        </tr>
    </tbody>
</table>
</div>
    <?php
      }
      else{

      }
    ?>

    <?php
        if(isset($_POST['premiereleague'])){
    ?>
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
            <td>Manchester City</td>
            <td>38</td>
            <td>29</td>
            <td>6</td>
            <td>3</td>
            <td>99:26</td>
            <td>93</td>
        </tr>
        <tr class="active-row">
            <td>2</td>
            <td>Liverpool</td>
            <td>38</td>
            <td>28</td>
            <td>8</td>
            <td>2</td>
            <td>94:26</td>
            <td>92</td>
        </tr>
        <tr class="active-row">
            <td>3</td>
            <td>Chelsea</td>
            <td>38</td>
            <td>21</td>
            <td>11</td>
            <td>6</td>
            <td>76:33</td>
            <td>74</td>
        </tr>
        <tr class="active-row">
            <td>4</td>
            <td>Tottenham</td>
            <td>38</td>
            <td>22</td>
            <td>5</td>
            <td>11</td>
            <td>69:40</td>
            <td>71</td>
        </tr>
        <tr class="active-row">
            <td>5</td>
            <td>Arsenal</td>
            <td>38</td>
            <td>22</td>
            <td>3</td>
            <td>13</td>
            <td>61:48</td>
            <td>69</td>
        </tr>
        <tr class="active-row">
            <td>6</td>
            <td>Manchester United</td>
            <td>38</td>
            <td>16</td>
            <td>10</td>
            <td>12</td>
            <td>57:57</td>
            <td>58</td>
        </tr>
        <tr class="active-row">
            <td>7</td>
            <td>West Ham</td>
            <td>38</td>
            <td>16</td>
            <td>8</td>
            <td>14</td>
            <td>60:51</td>
            <td>56</td>
        </tr>
        <tr class="active-row">
            <td>8</td>
            <td>Leicester</td>
            <td>38</td>
            <td>14</td>
            <td>10</td>
            <td>14</td>
            <td>62:59</td>
            <td>52</td>
        </tr>
        <tr class="active-row">
            <td>9</td>
            <td>Brighton</td>
            <td>38</td>
            <td>12</td>
            <td>15</td>
            <td>11</td>
            <td>42:44</td>
            <td>51</td>
        </tr>
        <tr class="active-row">
            <td>10</td>
            <td>Wolverhampton</td>
            <td>38</td>
            <td>15</td>
            <td>6</td>
            <td>17</td>
            <td>38:43</td>
            <td>51</td>
        </tr>
        <tr class="active-row">
            <td>11</td>
            <td>Newcastle</td>
            <td>38</td>
            <td>13</td>
            <td>10</td>
            <td>15</td>
            <td>44:62</td>
            <td>49</td>
        </tr>
        <tr class="active-row">
            <td>12</td>
            <td>Crystal Palace</td>
            <td>38</td>
            <td>11</td>
            <td>15</td>
            <td>12</td>
            <td>50:46</td>
            <td>48</td>
        </tr>
        <tr class="active-row">
            <td>13</td>
            <td>Brentford</td>
            <td>38</td>
            <td>13</td>
            <td>7</td>
            <td>18</td>
            <td>48:56</td>
            <td>46</td>
        </tr>
        <tr class="active-row">
            <td>14</td>
            <td>Aston Villa</td>
            <td>38</td>
            <td>13</td>
            <td>6</td>
            <td>19</td>
            <td>52:54</td>
            <td>45</td>
        </tr>
        <tr class="active-row">
            <td>15</td>
            <td>Southamton</td>
            <td>38</td>
            <td>9</td>
            <td>13</td>
            <td>16</td>
            <td>43:67</td>
            <td>40</td>
        </tr>
        <tr class="active-row">
            <td>16</td>
            <td>Everton</td>
            <td>38</td>
            <td>11</td>
            <td>6</td>
            <td>21</td>
            <td>43:66</td>
            <td>39</td>
        </tr>
        <tr class="active-row">
            <td>17</td>
            <td>Leeds</td>
            <td>38</td>
            <td>9</td>
            <td>11</td>
            <td>18</td>
            <td>42:79</td>
            <td>38</td>
        </tr>
        <tr class="active-row">
            <td>18</td>
            <td>Burnley</td>
            <td>38</td>
            <td>7</td>
            <td>14</td>
            <td>17</td>
            <td>34:53</td>
            <td>35</td>
        </tr>
        <tr class="active-row">
            <td>19</td>
            <td>Watford</td>
            <td>38</td>
            <td>6</td>
            <td>5</td>
            <td>27</td>
            <td>34:77</td>
            <td>23</td>
        </tr>
        <tr class="active-row">
            <td>20</td>
            <td>Norwich</td>
            <td>38</td>
            <td>5</td>
            <td>7</td>
            <td>26</td>
            <td>23:84</td>
            <td>22</td>
        </tr>
    </tbody>
</table>
</div>
    <?php
      }
      else{

      }
    ?>

    <?php
        if(isset($_POST['bundesliga'])){
    ?>
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
            <td>Bayern Munich</td>
            <td>34</td>
            <td>24</td>
            <td>5</td>
            <td>5</td>
            <td>97:37</td>
            <td>77</td>
        </tr>
        <tr class="active-row">
            <td>2</td>
            <td>Borussia Dortmund</td>
            <td>34</td>
            <td>22</td>
            <td>3</td>
            <td>9</td>
            <td>85:52</td>
            <td>769</td>
        </tr>
        <tr class="active-row">
            <td>3</td>
            <td>Bayer Leverkusen</td>
            <td>34</td>
            <td>19</td>
            <td>7</td>
            <td>8</td>
            <td>80:47</td>
            <td>64</td>
        </tr>
        <tr class="active-row">
            <td>4</td>
            <td>RB Leipzig</td>
            <td>34</td>
            <td>17</td>
            <td>7</td>
            <td>10</td>
            <td>72:37</td>
            <td>58</td>
        </tr>
        <tr class="active-row">
            <td>5</td>
            <td>Union Berlin</td>
            <td>38</td>
            <td>16</td>
            <td>9</td>
            <td>9</td>
            <td>50:44</td>
            <td>58</td>
        </tr>
        <tr class="active-row">
            <td>6</td>
            <td>Fribourg</td>
            <td>34</td>
            <td>15</td>
            <td>10</td>
            <td>9</td>
            <td>58:46</td>
            <td>55</td>
        </tr>
        <tr class="active-row">
            <td>7</td>
            <td>FC Cologne</td>
            <td>34</td>
            <td>14</td>
            <td>10</td>
            <td>10</td>
            <td>52:49</td>
            <td>52</td>
        </tr>
        <tr class="active-row">
            <td>8</td>
            <td>Mayence</td>
            <td>34</td>
            <td>13</td>
            <td>7</td>
            <td>14</td>
            <td>50:45</td>
            <td>46</td>
        </tr>
        <tr class="active-row">
            <td>9</td>
            <td>Hoffenheim</td>
            <td>34</td>
            <td>13</td>
            <td>7</td>
            <td>14</td>
            <td>58:60</td>
            <td>46</td>
        </tr>
        <tr class="active-row">
            <td>10</td>
            <td>Borussia M'Gladbach</td>
            <td>34</td>
            <td>12</td>
            <td>9</td>
            <td>13</td>
            <td>54:61</td>
            <td>45</td>
        </tr>
        <tr class="active-row">
            <td>11</td>
            <td>Eintracht Francfort</td>
            <td>34</td>
            <td>10</td>
            <td>12</td>
            <td>12</td>
            <td>45:49</td>
            <td>42</td>
        </tr>
        <tr class="active-row">
            <td>12</td>
            <td>Wolfsburg</td>
            <td>34</td>
            <td>12</td>
            <td>6</td>
            <td>16</td>
            <td>43:54</td>
            <td>42</td>
        </tr>
        <tr class="active-row">
            <td>13</td>
            <td>Bochum</td>
            <td>34</td>
            <td>12</td>
            <td>6</td>
            <td>16</td>
            <td>38:52</td>
            <td>42</td>
        </tr>
        <tr class="active-row">
            <td>14</td>
            <td>Augsbourg</td>
            <td>34</td>
            <td>10</td>
            <td>8</td>
            <td>16</td>
            <td>39:56</td>
            <td>38</td>
        </tr>
        <tr class="active-row">
            <td>15</td>
            <td>VfB Stuttgart</td>
            <td>34</td>
            <td>7</td>
            <td>12</td>
            <td>15</td>
            <td>41:59</td>
            <td>33</td>
        </tr>
        <tr class="active-row">
            <td>16</td>
            <td>Hertha Berlin</td>
            <td>34</td>
            <td>9</td>
            <td>6</td>
            <td>19</td>
            <td>37:71</td>
            <td>33</td>
        </tr>
        <tr class="active-row">
            <td>17</td>
            <td>Arminia Bielefeld</td>
            <td>34</td>
            <td>5</td>
            <td>13</td>
            <td>16</td>
            <td>27:53</td>
            <td>28</td>
        </tr>
        <tr class="active-row">
            <td>18</td>
            <td>Greuther Fürth</td>
            <td>34</td>
            <td>3</td>
            <td>9</td>
            <td>22</td>
            <td>28:82</td>
            <td>18</td>
        </tr>
    </tbody>
</table>
</div>
    <?php
      }
      else{

      }
    ?>
</div>

<br>

