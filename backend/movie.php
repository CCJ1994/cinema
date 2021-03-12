<section class="my-5">
  <div class="container p-5" style="min-height:100vh;">
  <?php
$all=$Movie->count();
$div=5;
$pages=ceil($all/$div);
$now=(isset($_GET['p']))?$_GET['p']:1;
$start=($now-1)*$div;

$rows=$Movie->all("limit $start,$div");
?>
<div class="pt-3 pb-2 mb-3 border-bottom">
  <h2 class="title">電影管理</h2>
</div>
<form action="./api/edit.php" method="post">
  <div id="editmovie" class="row row-cols-1 row-cols-md-3 g-3 my-3">
    <?php
  foreach($rows as $row){
  ?>
    <div class="col my-2">
      <div class="card">
        <img src="./img/<?=$row['img'];?>" class="card-img-top" style="height:180px;object-fit:cover;">
        <div class="card-body row g-3">
          <div class="card-text form-floating border-bottom col-6">
            <select class="form-select border-0" id="level<?=$row['id'];?>" name="level[]">
              <option value="1" <?=($row['level']=='1')?'selected':'';?>>普遍級</option>
              <option value="2" <?=($row['level']=='2')?'selected':'';?>>輔導級</option>
              <option value="3" <?=($row['level']=='3')?'selected':'';?>>保護級</option>
              <option value="4" <?=($row['level']=='4')?'selected':'';?>>限制級</option>
            </select>
            <label for="level<?=$row['id'];?>" style="font-size:12px;">分級</label>
          </div>
          <div class="card-text form-floating border-bottom col-6">
            <input class="form-control border-0" id="length<?=$row['id'];?>" name="length[]" placeholder="中文片名"
            value="<?=$row['length'];?>"  >
            <label for="length<?=$row['id'];?>" style="font-size:12px;">片長</label>
          </div>
          <div class="card-text form-floating border-bottom col-6">
            <input class="form-control border-0" id="zhname<?=$row['id'];?>" name="zhname[]" placeholder="中文片名"
            value="<?=$row['zhname'];?>"  >
            <label for="zhname<?=$row['id'];?>" style="font-size:12px;">中文片名</label>
          </div>
          <div class="card-text form-floating border-bottom col-6">
            <input class="form-control border-0" id="enname<?=$row['id'];?>" name="enname[]" placeholder="中文片名"
            value="<?=$row['enname'];?>"  >
            <label for="enname<?=$row['id'];?>" style="font-size:12px;">英文片名</label>
          </div>
          <div class="card-text form-floating border-bottom col-6">
            <input class="form-control border-0" id="actor<?=$row['id'];?>" name="actor[]" placeholder="中文片名"
            value="<?=$row['actor'];?>"  >
            <label for="actor<?=$row['id'];?>" style="font-size:12px;">演員</label>
          </div>
          <div class="card-text form-floating border-bottom col-6">
            <input class="form-control border-0" id="director<?=$row['id'];?>" name="director[]" placeholder="中文片名"
            value="<?=$row['director'];?>"  >
            <label for="director<?=$row['id'];?>" style="font-size:12px;">導演</label>
          </div>
          <div class="card-text form-floating border-bottom my-1">
            <textarea class="form-control border-0" id="intro<?=$row['id'];?>" name="intro[]" placeholder="Description"
            ><?=$row['intro'];?></textarea>
            <label for="intro<?=$row['id'];?>" style="font-size:12px;">劇情簡介</label>
          </div>
          <div class="d-flex justify-content-end">
            <div class="form-check mx-2">
              <input class="form-check-input" type="checkbox" id="workSh<?=$row['id'];?>" name="sh[]"
                value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
              <label class="form-check-label" for="workSh<?=$row['id'];?>">顯示</label>
            </div>
            <div >
              <input class="btn btn-sm btn-outline-secondary" type="button" id="moviekDel<?=$row['id'];?>" name="del[]"
                value="刪除" onclick="del('cinema_movie',<?=$row['id']?>)">
            </div>
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
          </div>
          <div>
            <button class="chgbtn btn btn-secondary" type="button"
              onclick="op('#chgModal','.chgContent','./modal/upload.php?table=<?=$do;?>&id=<?=$row['id'];?>')">更換</button>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <button id="addbtn" class="btn" type="button"><i class="far fa-plus-square fa-2x"></i></button>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <?php if(($now-1)>0){ ?>
    <div class="me-2">
      <a href="?do=resume_mywork&p=<?=$now-1;?>"><i class="fas fa-caret-left fa-2x" style="color:#273c75;"></i></a>
    </div>
    <?php } ?>
    <div class="btn-toolbar " role="toolbar">
      <div class="btn-group me-2" role="group">
        <?php for($i=1;$i<=$pages;$i++){
            if($i==$now){ ?>
        <a class="btn btn-secondary" href="?do=resume_mywork&p=<?=$i;?>">
          <?=$i;?>
        </a>
        <?php  }else{ ?>
        <a class="btn btn-outline-secondary" href="?do=resume_mywork&p=<?=$i;?>">
          <?=$i;?>
        </a>
        <?php  }
        }?>
      </div>
    </div>
    <?php  if($now+1<=$pages){ ?>
    <div class="ms-2">
      <a href="?do=resume_mywork&p=<?=$now+1;?>"><i class="fas fa-caret-right fa-2x" style="color:#273c75;"></i></a>
    </div>
    <?php } ?>
  </div>
  <?php if(!empty($row)){ ?>
  <div class="text-end">
    <button type="submit" class="btn btn-outline-primary">Save</button>
  </div>
  <?php } ?>
</form>
  </div>
</section>
<script>
  
</script>