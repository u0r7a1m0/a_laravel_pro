<h2>問い合わせ一覧</h2>
<table border="1">
    <tr>
        <td>問い合わせ先部署</td>
        <td>氏名</td>
        <td>メールアドレス</td>
        <td>お問い合わせ内容</td>
    </tr>
    <tr>
        <td>あああ</td>
        <td>ああいう</td>
        <td>うううう</td>
        <td>いいい</td>
    </tr>
</table>

<h2>問い合わせ内容作成</h2>
    <form action="/contacts" method="POST">
        @csrf
        <lavel>■問い合わせ先部署</lavel>
        <input type="textarea" name="id" placeholder="問い合わせ先部署">
        <div>

        </div>
        <div>
            <lavel>■氏名</lavel>
            <input type="textarea" name="name" placeholder="山田 太郎">
            @error('name')
            <div class="alert text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <lavel>■メールアドレス</lavel>
            <input type="textarea" name="email" placeholder="example@com">
        </div>

        <div>
            <lavel>■お問い合わせ内容</lavel><br />
            <input type="textarea" name="contact" placeholder="内容を記載してください。" size="50" >
        </div>

        <div>
            <lavel>■年齢</lavel>
            <select name="number">
                <?php for ($i = 1; $i <= 100; $i++) { ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
        </div>

        <div>
            <lavel>■性別</lavel>
            <select name="age">
                <option value="1" selected="selected">未設定</option>
                <option value="2">男</option>
                <option value="3">女</option>
            </select>
        </div>

        <div>
            <button type="submit">登録</button>
        </div>
    </form>


