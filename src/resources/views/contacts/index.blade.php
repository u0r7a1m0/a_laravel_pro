<h2>問い合わせ一覧</h2>
<table></table>
    <th>
    <thead>
        <td>問い合わせ先部署</td>
        <td>氏名</td>
        <td>メールアドレス</td>
        <td>お問い合わせ内容</td>
        
    </thead>
    </th>

    <!-- @foreach($contacts as $contact)
    <tr>
        <td>{{$contact->id}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->contact}}</td>
    </tr>
    @endforeach -->

</table>


<h2>問い合わせ内容作成</h2>

    <!-- <form action="{{ route('contacts.store') }}" method="POST"> -->
        <!-- フォームの内容 -->
        <!-- @csrf -->
        <lavel>問い合わせ先部署<span>※必須</span><</lavel>
        <!-- セレクトボックス -->
    
        <lavel>氏名<span>※必須</span><</lavel>
        <!-- テキスト -->
        
        <lavel>メールアドレス<span>※必須</span></lavel>
        <!-- テキスト -->
        
        <lavel>お問い合わせ内容<span>※必須</span></lavel>
        <!-- テキストエリア -->
        {!! nl2br(e($inputs['contact'])) !!}
    
        <lavel>年齢<span>※必須</span></lavel>
        <!-- セレクトボックス -->
        
        <lavel>性別<span>※必須</span></lavel>
        <!-- セレクトボックス -->

        <button type="submit">登録</button>
    </form>


