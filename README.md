# thomasjbradley/signature-to-imageについて

### インストール

まず、ライブラリー "Image Processing and GD"は必要のためyum installでインストール

```
sudo yum instal php-gd
```

Amazon Linuxのphp v5.5 の場合
```
sudo yum install php55-gd
```

sigフォルダにapacheユーザに書き込み権限を与えます。
```
sudo chmod g+w -R sig
sudo chown :apache -R sig
```

### Demo
index.phpをブラウザ上で開いてください。

必要なライブラリーやcss,javascriptなどすでにインポートしてありますので、即使えます。

### 参照

https://github.com/thomasjbradley/signature-to-image/

http://thomasjbradley.ca/lab/signature-pad/
