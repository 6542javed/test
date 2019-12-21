<div class="dashboard">
<div class="boxcontainer">
  <div class="box">
    Ebooks<br/>
    <div class="count">
      <?php
      $query = "select * from document where type= 'e'";
      if($connect->query($query)){
        $result=$connect->query($query);
        $rows=mysqli_num_rows($result);
        echo $rows;
      } ?>
    </div>

  </div>
  <div class="box">
    College Publishing<br/>
    <div class="count">
      <?php
      $query = "select * from document where type= 'c'";
      if($connect->query($query)){
        $result=$connect->query($query);
        $rows=mysqli_num_rows($result);
        echo $rows;
      } ?>
    </div>
  </div>
  <div class="box">
    Local Publishing<br/>
    <div class="count">
      <?php
      $query = "select * from document where type= 'l'";
      if($connect->query($query)){
        $result=$connect->query($query);
        $rows=mysqli_num_rows($result);
        echo $rows;
      } ?>
    </div>
  </div>
  <div class="box">
    Audios<br/>
    <div class="count">
      <?php
      $query = "select * from media where type= '1'";
      if($connect->query($query)){
        $result=$connect->query($query);
        $rows=mysqli_num_rows($result);
        echo $rows;
      } ?>
    </div>
  </div>
  <div class="box">
    Videos<br/>
    <div class="count">
      <?php
      $query = "select * from media where type= '0'";
      if($connect->query($query)){
        $result=$connect->query($query);
        $rows=mysqli_num_rows($result);
        echo $rows;
      } ?>
    </div>
  </div>
  <div class="box">
    Question Papers<br/>
    <div class="count">
      <?php
      $query = "select * from question_papers ";
      if($connect->query($query)){
        $result=$connect->query($query);
        $rows=mysqli_num_rows($result);
        echo $rows;
      } ?>
    </div>
  </div>
</div>
</div>
