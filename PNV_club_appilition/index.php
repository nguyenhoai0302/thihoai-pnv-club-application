<!DOCTYPE html>
<html>
<head>
  <title>index</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container">
    <form action="result.php" method="post">
      <div class="row rows">
        <div class="col-4">
          <label for="name">Name</label>
        </div>
        <div class="col-8">
          <input type="text" id="name" name="name">
        </div>
      </div>

      <div class="row rows">
        <div class="col-4">
          <label for="clubname">Club you want to apply</label>
        </div>
        <div class="col-8">
          <select id="clubname" name="clubname">
            <option value="Robotic Club">Robotic Club</option>
            <option value="English Club">English Club</option>
            <option value="IT Club">IT Club</option>
          </select>
        </div>
      </div>
      
      <div class="row rows">
          <label class="col-4" for="time">Be time for you</label>
        <div class="col-8">
          <div class="row">
            <div class="col-6">
              <input type="radio" value="saturday mornings" name="time"> Saturday mornings <br>
              <input type="radio" value="sunday afternoons" name="time"> Sunday afternoons     
            </div>
            <div class="col-6">
              <input type="radio" value="saturday afternoons" name="time"> Saturday afternoons </br>
            </div>
          </div>
                    
        </div>
      </div>
      
      <div class="row rows">
        <div class="col-4">
          <label for="skills">Your skills</label>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-6">
              <input type="checkbox" id="coder" name="skills[]" value="the best coder"> the best coder </br>
              <input type="checkbox" id="singer" name="skills[]" value="singer"> singer </br>
              <input type="checkbox" id="star" name="skills[]" value="a super star"> a super star</br>
              <input type="checkbox" id="eater" name="skills[]" value="the best eater"> the best eater</br>
            </div>
            <div class="col-6">
              <input type="checkbox" id="arts" name="skills[]" value="good in arts"> good in arts </br>
              <input type="checkbox" id="dancer" name="skills[]" value="a crazy dancer"> a crazy dancer</br>
              <input type="checkbox" id="design" name="skills[]" value="good in design"> good in design</br>
              <input type="checkbox" id="speeches" name="skills[]" value="good in speeches"> good in speeches</br>
            </div>
          </div>
          
        </div>
      </div>
      
      
      <div class="submit">
        <input type="submit" value="SUBMIT">
      </div>
    </form>
  </div>

</body>
</html>


