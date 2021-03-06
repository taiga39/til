# DBの勉強

## トランザクション
銀行のような「送金」、「入金」が2つで一つとなっている操作についての処理

### ACID特性(http://e-words.jp/w/ACID%E7%89%B9%E6%80%A7.html)
トランザクションに求められる4つの特性。

#### Atomicity（原子性/不可分性）
トランザクションに含まれる個々の手順が「実行される」もしくは「実行されない」のどちらかであること。

#### Consistency（一貫性/整合性）
トランザクションの前後でデータの整合性が保たれ矛盾のない状態が継続される性質。

#### Isolation（独立性/隔離性）
トランザクション実行中の処理過程が外部から隠蔽され、他の処理などに影響を与えない性質である。例えば、送金処理の途上である「出金は実施済みだが入金は未実施」といった状態を外部から読み出されないよう排他制御などを行う

#### Durability（耐久性/永続性）
トランザクションが完了したら、その結果は記録され、システム障害などが生じても失われることがないという性質である。データ操作の時系列の記録（ログ）をストレージなどに保存しておき、データ記録中に障害などで中断したら記録を元に更新を反映させるといった処理が行われる。


### 同時実行制御
#### ダーティリード
#### ファジーリード
#### ファントムリード
#### ロストアップリード