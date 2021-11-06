@extends('layouts.registerapp')

@section('title','Index')

@section('menubar')
@parent
新規登録(*は必須項目)
@endsection

@section('content')
<p>{{$msg}}</p>
<form action="/register" method="post">
    <table>
    @csrf
    @error('code')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>ミューパレプレイヤーコード*：</th><td><input type="text" name="code" value="{{old('code')}}"></td></tr>
    @error('mail')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>メールアドレス*：</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
    @error('passcon_confirmation')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>パスワード*</th><td><input type="password" name="passcon_confirmation" value="{{old('pass_confirmation')}}"></td></tr>
    @error('passcon')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>パスワード(確認用)*</th><td><input type="password" name="passcon" value="{{old('passcon')}}"></td></tr>
    @error('looks')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    @error('job')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>職業*：</th><td><input type="text" name="job" value="{{old('job')}}"></td></tr>
    @error('mail')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    <tr><th>見た目*</th>
        <td><input type="radio" name="looks" value="fem">フェム</td>
        <td><input type="radio" name="looks" value="genderless">中性</td>
        <td><input type="radio" name="looks" value="boysh">ボイ</td>
        <td><input type="radio" name="looks" value="feel">気分によって</td>
        <td><input type="radio" name="looks" value="unknown">わからない</td>
    </tr>
    @error('tabaco')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>喫煙の有無*</th>
        <td><input type="radio" name="tabaco" value="zero">吸わない</td>
        <td><input type="radio" name="tabaco" value="onlyere">電子たばこのみ吸う</td>
        <td><input type="radio" name="tabaco" value="both">紙たばこ、電子たばこ両方吸う</td>
        <td><input type="radio" name="tabaco" value="onlyme">非喫煙者の前では吸わない</td>
    </tr>
    @error('alchol')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>飲酒の有無*</th>
        <td><input type="radio" name="alchol" value="zero">飲まない</td>
        <td><input type="radio" name="alchol" value="little">付き合い程度</td>
        <td><input type="radio" name="alchol" value="often">よく飲む</td>
    </tr>
    @error('sexual')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>セクシャル*(女性が好きな心身共に女性のための出会い系サービスのため、ここがわからない方は登録できません)</th>
        <td><input type="radio" name="sexual" value="lesbian">レズビアン</td>
        <td><input type="radio" name="sexual" value="bisexual">バイセクシャル</td>
        <td><input type="radio" name="sexual" value="pansexual">パンセクシャル</td>
    </tr>
    @error('area')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>都道府県*</th>
        <td><select name="area">
            <option value="">選択して下さい</option>
            <option value="hokkaido">北海道</option>
            <option value="aomori">青森県</option>
            <option value="iwate">岩手県</option>
            <option value="miyagi">宮城県</option>
            <option value="akita">秋田県</option>
            <option value="yamagata">山形県</option>
            <option value="fukushima">福島県</option>
            <option value="ibaragi">茨城県</option>
            <option value="tochigi">栃木県</option>
            <option value="gunma">群馬県</option>
            <option value="saitama">埼玉県</option>
            <option value="chiba">千葉県</option>
            <option value="tokyo">東京都</option>
            <option value="kanagawa">神奈川県</option>
            <option value="nigata">新潟県</option>
            <option value="toyama">富山県</option>
            <option value="ishikawa">石川県</option>
            <option value="fukui">福井県</option>
            <option value="yamanashi">山梨県</option>
            <option value="nagano">長野県</option>
            <option value="gifu">岐阜県</option>
            <option value="sizuoka">静岡県</option>
            <option value="aichi">愛知県</option>
            <option value="mie">三重県</option>
            <option value="siga">滋賀県</option>
            <option value="kyoto">京都府</option>
            <option value="osaka">大阪府</option>
            <option value="hyogo">兵庫県</option>
            <option value="nara">奈良県</option>
            <option value="wakayama">和歌山県</option>
            <option value="tottori">鳥取県</option>
            <option value="shimane">島根県</option>
            <option value="okayama">岡山県</option>
            <option value="hiroshima">広島県</option>
            <option value="yamaguchi">山口県</option>
            <option value="tokushima">徳島県</option>
            <option value="kagawa">香川県</option>
            <option value="ehime">愛媛県</option>
            <option value="kochi">高知県</option>
            <option value="fukuoka">福岡県</option>
            <option value="saga">佐賀県</option>
            <option value="nagasaki">長崎県</option>
            <option value="kumamoto">熊本県</option>
            <option value="oita">大分県</option>
            <option value="miyazaki">宮崎県</option>
            <option value="kagoshima">鹿児島県</option>
            <option value="okinawa">沖縄県</option>
        </select></td>
    </tr>
    @error('yourlooks')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>相手の希望の見た目</th>
        <td><input type="radio" name="looks" value="fem">フェム</td>
        <td><input type="radio" name="looks" value="genderless">中性</td>
        <td><input type="radio" name="looks" value="boysh">ボイ</td>
    </tr>
    @error('purpose')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>出会いの目的*：</th>
        <td><input type="checkbox" name="purpose[]" value="partner"{{ is_array(old("purpose")) && in_array("partner", old("purpose"), true)? 'checked="checked"' : '' }}>将来のパートナー探し</td>
        <td><input type="checkbox" name="purpose[]" value="friends"{{ is_array(old("purpose")) && in_array("friends", old("purpose"), true)? 'checked="checked"' : '' }}>友達募集</td>
        <td><input type="checkbox" name="purpose[]" value="onenight"{{ is_array(old("purpose")) && in_array("onenight", old("purpose"), true)? 'checked="checked"' : '' }}>一夜限り</td></tr>
    @error('sex')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>夜の役割*</th>
        <td><input type="radio" name="sex" value="tachi">タチ</td>
        <td><input type="radio" name="sex" value="riva">リバ</td>
        <td><input type="radio" name="sex" value="neko">ネコ</td>
        <td><input type="radio" name="sex" value="unknown">わからない</td>
        <td><input type="radio" name="sex" value="noans">答えたくない</td>
    </tr>
    <tr><th>相手のセクシャル</th>
        <td><input type="radio" name="yoursexual" value="lesbian">レズビアン</td>
        <td><input type="radio" name="yoursexual" value="bisexual">バイセクシャル</td>
        <td><input type="radio" name="yoursexual" value="pansexual">パンセクシャル</td>
    </tr>
    <tr><th>相手の住まい</th>
        <td><select name="yourarea">
            <option value="">選択して下さい</option>
            <option value="hokkaido">北海道</option>
            <option value="aomori">青森県</option>
            <option value="iwate">岩手県</option>
            <option value="miyagi">宮城県</option>
            <option value="akita">秋田県</option>
            <option value="yamagata">山形県</option>
            <option value="fukushima">福島県</option>
            <option value="ibaragi">茨城県</option>
            <option value="tochigi">栃木県</option>
            <option value="gunma">群馬県</option>
            <option value="saitama">埼玉県</option>
            <option value="chiba">千葉県</option>
            <option value="tokyo">東京都</option>
            <option value="kanagawa">神奈川県</option>
            <option value="nigata">新潟県</option>
            <option value="toyama">富山県</option>
            <option value="ishikawa">石川県</option>
            <option value="fukui">福井県</option>
            <option value="yamanashi">山梨県</option>
            <option value="nagano">長野県</option>
            <option value="gifu">岐阜県</option>
            <option value="sizuoka">静岡県</option>
            <option value="aichi">愛知県</option>
            <option value="mie">三重県</option>
            <option value="siga">滋賀県</option>
            <option value="kyoto">京都府</option>
            <option value="osaka">大阪府</option>
            <option value="hyogo">兵庫県</option>
            <option value="nara">奈良県</option>
            <option value="wakayama">和歌山県</option>
            <option value="tottori">鳥取県</option>
            <option value="shimane">島根県</option>
            <option value="okayama">岡山県</option>
            <option value="hiroshima">広島県</option>
            <option value="yamaguchi">山口県</option>
            <option value="tokushima">徳島県</option>
            <option value="kagawa">香川県</option>
            <option value="ehime">愛媛県</option>
            <option value="kochi">高知県</option>
            <option value="fukuoka">福岡県</option>
            <option value="saga">佐賀県</option>
            <option value="nagasaki">長崎県</option>
            <option value="kumamoto">熊本県</option>
            <option value="oita">大分県</option>
            <option value="miyazaki">宮崎県</option>
            <option value="kagoshima">鹿児島県</option>
            <option value="okinawa">沖縄県</option>
        </select></td>
    @error('yoursex')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>相手に望む夜の役割</th>
        <td><input type="radio" name="yoursex" value="tachi">タチ</td>
        <td><input type="radio" name="yoursex" value="riva">リバ</td>
        <td><input type="radio" name="yoursex" value="neko">ネコ</td>
        <td><input type="radio" name="yoursex" value="unknown">わからない</td>
        <td><input type="radio" name="yoursex" value="noans">答えたくない</td>
    </tr>
    @error('showok')
    <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror
    <tr><th>会員一覧に表示していいですか?*</th>
        <td><input type="radio" name="showok" value="ok">はい</td>
        <td><input type="radio" name="showok" value="ng">いいえ</td>
    @error('servicechecked')
        <tr><th>ERROR</th>
        <td>{{$message}}</td></tr>
    @enderror    
    <tr><th>利用規約への同意*：</th>
        <td><input type="checkbox" name="servicechecked[]" value="1"{{ is_array(old("servicechecked")) && in_array("1", old("servicechecked"), true)? 'checked="checked"' : '' }}>利用規約に同意する</td></tr>
    <tr><th></th><td><input type="submit"  value="send"></td></tr>
    </table>
    </form>
    </body>
    </html>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
<?php
?>