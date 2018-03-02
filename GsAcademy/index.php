<?php
  include("function/funcs.php");
 ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Kuranami Haruka">
  <title>ジーズアカデミー</title>
  <link href="css/style.css" rel="stylesheet">

  <!-- BootstrapのCSS読み込み -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- BootstrapのJS読み込み -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Google Map API V3のJS読み込み -->
  <script src="http://maps.google.com/maps/api/js?v=3&sensor=false" type="text/javascript" charset="UTF-8"></script>
  <script src="js/google_map.js" type="text/javascript" charset="UTF-8"></script>
  <script>$(document).ready(gmap('東京都港区北青山3-5-6'));</script>
</head>

<body>
  <!-- header -->
  <header class="header" id="header">
    <nav class="navi-box">
      <div class="navi-title">ジーズアカデミー</div>
      <div class="navi-courcse"><a href="#course">コース</a></div>
      <div class="navi-mentor"><a href="#mentor">メンター</a></div>
      <div class="navi-info"><a href="#info">情報</a></div>
      <div class="navi-info"><a href="#form">お問い合わせ</a></div>
    </nav>
  </header>

  <!-- header-bk -->
  <div class="header-bk"></div>

  <!-- title -->
  <div class="title-box" id="title-box">
    <h1>ジーズアカデミー</h1>
    <p>
      ジーズアカデミー【公式】2015年4月創立。プログラミング初心者歓迎。
      社会人・大学生の就職希望者、起業希望者対象に、プログラミングのプロを養成。
      JavaScript/PHP/HTML5/CSS3/Ruby on Rails/Webサービスやゲームのエンジニア養成専門スクール（学校）です。
    </p>
  </div>

  <!-- main -->
  <div class="main-box" id="main-box">

    <!-- course -->
    <div class="course" id="course">
      <h2>ジーズアカデミーのコース</h2>
      <p>
        ジーズアカデミーではDevコースとLABコースの2つのコースが用意されています。
      </p>

      <!-- Devコース -->
      <div class="course-dev">
        <h3>Devコース</h3>
        <p>
          実装力を身につけ、Webサービスを創り上げるプロのエンジニアスキルを習得します。
          共通科目の後、Webサービスディベロッパーコース・Androidアプリディベロッパーコースを選択し、サーバーサイド（PHP＆RubyOnRails）からフロントエンド（JavaScript＆HTML5）までを、4ヶ月集中でトータルに学び、2ヶ月の卒業制作では現役の一流エンジニア・メンターがGitHUB上での個別指導を実施。
          オリジナルの「サービス」をローンチするまで、徹底指導を行います。
          最終の"Global GEEK オーディション"では様々な企業・VCが出来上がったサービスを評価するだけでなく、スカウト・出資までつながるチャンスとなっています。
        </p>
        <div class="course-dev-about">
          <h4>Devコースで学べること</h4>
          <ul>
            <li>JavaScript</li>
            <li>HTML5 API</li>
            <li>PHP</li>
            <li>Ruby on Rails</li>
          </ul>
        </div>
      </div>

      <!-- LABコース -->
      <div class="course-lab">
        <h3>LABコース</h3>
        <p>
          初心者からセカイのスタートアップ企業で活躍できるスキルと知識を習得するフルタイムコースです。
          実戦的なプログラミング力とワークフローをしっかり学んだ後、最先端のテクノロジーを一流のプロエンジニアの指導で研究します。
          これからのエンジニアに求められる「様々なテクノロジーを道具として活用できる能力」を、LABコースで手に入れてください。
        </p>
        <div class="course-lab-questionnaire">
          <h4>LABコース卒業生に聞いた！LABコースで学んで楽しかったこと</h4>
          <div class="container">
            <table class="table table-striped">
              <!-- <caption></caption> -->
              <thead>
                <tr>
                  <th>ランキング</th>
                  <th>学んで楽しかったこと</th>
                  <th>割合</th>
                </tr>
              </thead>
              <!-- <tfoot></tfoot> -->
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Node.js</td>
                  <td>45%</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>PHP</td>
                  <td>20%</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Androidアプリ制作</td>
                  <td>13%</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>iOSアプリ制作</td>
                  <td>12%</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>JavaScript</td>
                  <td>8%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- mentor -->
    <div class="mentor" id="mentor">
      <h2>ジーズアカデミーのメンターについて</h2>
      <p>
        GitHUBなどのバージョン管理ツール上で、ラスト2ヶ月間マンツーマンでオンライン指導。
        現場の視点からコードレビュー（あなたのプログラミングを見てアドバイス）してくれます。
        基礎を固めたうえでプロに期間中何度でもアドバイスをもらえるので、あなた次第でどこまでも高レベルを目指すことができます。
      </p>
    </div>

    <!-- info -->
    <div class="info" id="info">
      <h2>ジーズアカデミーの情報</h2>
      <div class="container">
        <table class="table table-striped">
          <!-- <caption></caption> -->
          <!-- <thead></thead> -->
          <!-- <tfoot></tfoot> -->
          <tbod>
            <tr>
              <th>名称</th>
              <td>ジーズアカデミーTOKYO</td>
            </tr>
            <tr>
              <th>募集コース</th>
              <td>週末集中型 DEVコース フルタイム総合型  LABコース 授業会場</td>
            </tr>
            <tr>
              <th>授業会場</th>
              <td>G's ACADEMY TOKYO BASE(表参道） 東京メトロ 表参道 徒歩3分</td>
            </tr>
            <tr>
              <th>TEL</th>
              <td><a href="tel:0354135045">03-5413-5045</a></td>
            </tr>
            <tr>
              <th>FAX</th>
              <td>03-5413-5046</td>
            </tr>
            <tr>
              <th>メール</th>
              <td><a href="mailto:info@gsacademy.tokyo">info@gsacademy.tokyo</a></td>
            </tr>
            <tr>
              <th>運営会社</th>
              <td>デジタルハリウッド株式会社</td>
            </tr>
            <tr>
              <th>住所</th>
              <td>
                <div id="google_map" style="width: 600px; height: 600px">
                  〒107-0061東京都港区北青山3-5-6 青朋ビル2F
                </div>
              </td>
            </tr>
          </tbod>
        </table>
      </div>
    </div>


  </div>

  <!-- form -->
  <div class="form" id="form">
    <h2>お問い合わせ</h2>
    <p>*必須入力</p>
    <div class="">
      <form class="" action="" method="post">

        <!-- 個人情報 -->
        <fieldset>
          <legend>個人情報</legend>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">名前*</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="inputName" placeholder="テスト　一郎" onfocus="this.placeholder=''" onblur="this.placeholder='テスト　一郎'" required></input>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-4 control-label">Email*</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="test1@test.com" onfocus="this.placeholder=''" onblur="this.placeholder='test1@test.com'" required></input>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">性別*</label>
            <label class="radio-inline">
              <input type="radio" name="sex" value="男性" required>男性</input>
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" value="女性" required>女性</input>
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" value="その他" required>その他</input>
            </label>
          </div>
        </fieldset>

        <!-- アンケート -->
        <fieldset>
          <legend>アンケート</legend>
          <div class="form-group">
            <label class="col-sm-4 control-label">希望のコース*</label>
            <label class="radio-inline">
              <input type="radio" name="course" value="Devコース" required>Devコース</input>
            </label>
            <label class="radio-inline">
              <input type="radio" name="course" value="Labコース" required>Labコース</input>
            </label>
            <label class="radio-inline">
              <input type="radio" name="course" value="両方興味がある" required>両方興味がある</input>
            </label>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">ジーズアカデミーを何で知りましたか？（複数選択可）*</label>
            <label class="checkbox-inline">
              <input type="checkbox" name="acsessroot" value="口コミ">口コミ
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="acsessroot" value="SNS">SNS
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="acsessroot" value="検索">検索
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="acsessroot" value="知人からの紹介">知人からの紹介
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" name="acsessroot" value="その他">その他
            </label>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">説明会希望日時*</label>
            <div class="col-sm-2">
              <select name="datetime" class="form-control">
                <option value="datetime1">2018/4/1 10:00~</option>
                <option value="datetime2">2018/4/1 11:00~</option>
                <option value="datetime3">2018/4/2 17:00~</option>
              </select>
            </div>
          </div>
        </fieldset>

        <!-- button -->
        <div class="button-box">
          <!-- <p>ジャンケン　<input type="submit" class="btn-success" value="ポン"></p>
          <p><input type="reset" class="btn-success" value="リセット"></p> -->
        </div>

      </form>
    </div>
  </div>

  <!-- footer -->
  <footer id="footer">
    <div class="copyrights">
      copyrights 2018 G's Academy Tokyo All RIghts Reserved.
    </div>
  </footer>

</body>

</html>
