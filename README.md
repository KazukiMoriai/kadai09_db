## ①課題名
・db連携
 ## ②課題内容（どんな作品か）
・中古車売買サイト 「LoveYourCars」（db連携）
## ③アプリのデプロイURL デプロイしている場合はURLを記入（任意）
・https://moriai.sakura.ne.jp/kadai09_db/php/sell.php
## ④アプリのログイン用IDまたはPassword（ある場合）
・ID: なし  
・PW:なし
 ## ⑤工夫した点・こだわった点
・価格の並び替え機能をつけた  
・査定士のコメント欄を作った  
・classを利用したオブジェクトを中心としていた前verから、連想配列中心のコードへ書き換えた  
・登録フォームで、走行距離や価格をtype=numberで指定し、dbで型の違いによるエラーが起きないよう制御をかけた  
・修理歴は、あり→1, なし→0,の値として処理している  
・画像はパスをvarcharaで格納  
・画像の相対パスをdbへ格納することで、将来ローカルから別のサーバーへ移行してもコードを修正不要とした  
 ## ⑥次回トライしたいこと（又は機能）
・車検有効期限を現在～３年後の制御をかける  
 ## ⑦フリー項目（感想、シェアしたいこと等なんでも）
 ・画像の受け渡し、車両の並び替え機能、の悲願を2つも達成した！！！！！！  
 　やったーー！！！！！