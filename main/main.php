<div id="time">
  <ul>
    <li>
      <span>관람시간 3~10월 : 10:00 ~ 19:00, 11~2월 : 10:00 ~ 18:00
      </span>
    </li>
  </ul>
</div>
<div id="main_content">
  <div id="announce_root">
    <h4>&nbsp;공지사항</h4>
    <div id="announce">
      <?php
      if (!isset($conn)) {
        include $_SERVER['DOCUMENT_ROOT'] . "/php_source/project/common/db_connect.php";
      }
      $sql = "SELECT * FROM notice WHERE id = 'admin' ORDER BY num DESC LIMIT 5";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if (empty($result)) {
        echo "등록된 공지사항이 없습니다.";
      } else {
        foreach ($result as $row) {
      ?>
          <ul>
            <li>
              <span><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/php_source/project/notice/notice_view.php?num=<?= $row['num'] ?>"><?= $row["subject"] ?></a></span>
              <span><?= substr($row["regist_day"], 0, 10) ?></span>
            </li>
          </ul>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <div>
    <h4>&nbsp;디지털미술관</h4>
    <div id="digital">
      <iframe width="400" height="309" src="https://www.youtube.com/embed/esa0aVPQIrc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen id="digital1"></iframe>
      <iframe width="400" height="309" src="https://www.youtube.com/embed/O-LBsNBW5j0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen id="digital2"></iframe>
      <iframe width="400" height="309" src="https://www.youtube.com/embed/P__49UUD50k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen id="digital3"></iframe>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const announce = document.getElementById("announce");
    const digital1 = document.getElementById("digital1");
    const digital2 = document.getElementById("digital2");
    const digital3 = document.getElementById("digital3");
    const observer = new IntersectionObserver(function(entries) {
      for (const entry of entries) {
        if (entry.isIntersecting) {
          entry.target.style.setProperty('transform', 'translateY(0)');
          entry.target.style.setProperty('opacity', '1');
        } else {
          entry.target.style.setProperty('transform', 'translateY(100%)');
          entry.target.style.setProperty('opacity', '0');
        }
      }
    });
    observer.observe(announce)
    observer.observe(digital1)
    observer.observe(digital2)
    observer.observe(digital3)
  });
</script>