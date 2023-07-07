<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contents;
use App\Models\Comment;
use App\Models\Bookmarks;
use App\Models\Icons;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  トップ画面の表示
    public function index(Request $request)
    {
        if(request()->query('id')){
            $request->session()->put('user_id', request()->query('id'));
            $user_id = $request->session()->get('user_id');
            $user_icon = User::where('id', $user_id)
                        ->select('icon_images')
                        ->first();
            session()->flash('user_id',$user_id);
            session()->flash('user_icon',$user_icon);
            return view('/index',compact('user_id','user_icon'));
        } else {
            $user_id = $request->session()->get('user_id');
            $user_icon = User::where('id', $user_id)
                        ->select('icon_images')
                        ->first();
                        // dd($user_icon );
            session()->flash('user_id',$user_id);
            session()->flash('user_icon',$user_icon);
            return view('/index',compact('user_id','user_icon'));
        }

        return view('/index');
        
    }

    //ログイン画面の表示
    public function login(Request $request)
    {
        $request->session()->put('user_id', request()->query('id'));
        $user_id = $request->session()->get('user_id');
        return view('/login/index',compact('user_id'));
    }

    //ゲストログインの処理
    public function guestLogin(Request $request)
    {
        $guset_user_id = 1;
        $request->session()->put('user_id', $guset_user_id );
        $user_id = $request->session()->get('user_id');
        session()->flash('user_id',$user_id);

        return redirect()->action([IndexController::class, 'index']);
    }

    //ajaxの処理
    public function ajax(Request $request)
    {
        $login = DB::table('users')
        ->where('email', $request->user_id)
        ->where('password', $request->password)
        ->first();
        return $login;
    }

    //ログアウトの処理
    public function logout(Request $request)
    {
        $request->session()->flush('user_id');
        $request->session()->has('user_id');
        return redirect()->route('home');
    }

    //アカウント新規登録画面の表示
    public function singup(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        return view('/singup/index',compact('user_id'));
    }

    //アカウント新規登録の処理
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ],
        [
            'name.required' => '名前は必須項目です。',
            'name.unique' => '既に使われているユーザー名です。',
            'email.required'  => 'メールアドレスは必須項目です。',
            'email.unique' => '既に使われているメールアドレスです。',
            'password.required'  => 'パスワードは必須項目です。',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->icon_images = 'user_icon.png';
        $user->save();
        return redirect()->action([IndexController::class, 'login']);
    }

    //動物一覧画面の表示
    public function article(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        if($user_id){
            $user_icon = $request->session()->get('user_icon');
        }
        $contents = DB::table('contents')->get();
        session()->flash('user_icon',$user_icon);
        session()->flash('user_id',$user_id);
        return view('/article/index',compact('contents','user_id','user_icon'));
    }


    //検索結果画面の表示
    public function list(Request $request)
    {
        // 検索フォームで入力された値を取得する
        $search = $request->input('word');
        // プルダウンの値を取得する
        $family = $request->family;
        $lifestyle = $request->lifestyle;
        $friendly = $request->friendly;

        $user_icon = $request->session()->get('user_icon');

        if($request->user_id){
            if(!$search && empty($family) && empty($lifestyle) && empty($friendly)){ // 検索フォームが空欄の場合、すべてのデータ表示
                $contents = DB::table('contents')->get();
            }elseif($search && empty($family) && empty($lifestyle) && empty($friendly)){ // フリーワード検索結果を表示
                $contents = Contents::where('category', 'like', '%'.$search.'%')
                            ->orWhere('home_data', 'like', '%'.$search.'%')
                            ->orWhere('life_style', 'like', '%'.$search.'%')
                            ->orWhere('friendly', 'like','%'.$search.'%')
                            ->get();
            }else{
                $contents = Contents::where('home_data', $family)
                ->orWhere('life_style',  $search)
                ->orWhere('friendly',  $search)
                ->get();
            }
        }else{
            $user_id = $request->session()->get('user_id');
            if(!$search && empty($family) && empty($lifestyle) && empty($friendly)){ // 検索フォームが空欄の場合、すべてのデータ表示
                $contents = DB::table('contents')->get();
            }elseif($search && empty($family) && empty($lifestyle) && empty($friendly)){ // フリーワード検索結果を表示
                $contents = Contents::where('category', 'like', '%'.$search.'%')
                            ->orWhere('home_data', 'like', '%'.$search.'%')
                            ->orWhere('life_style', 'like', '%'.$search.'%')
                            ->orWhere('friendly', 'like','%'.$search.'%')
                            ->get();
            }else{
                $contents = Contents::where(function ($query) use ($family, $lifestyle, $friendly) {
                    if (!empty($family)) {
                        $query->where('home_data', $family);
                    }
                    if (!empty($lifestyle)) {
                        $query->where('life_style', $lifestyle);
                    }
                    if (!empty($friendly)) {
                        $query->where('friendly', $friendly);
                    }
                })
                ->get();
            }
        }

        session()->flash('user_id',$user_id);
        session()->flash('user_icon',$user_icon);
        return view('/list/index',compact('contents','user_id','user_icon'));
       
    }

    //検索結果の詳細画面の表示
    public function result(Request $request)
    {
        $user_icon = $request->session()->get('user_icon');

        if($request->contents_id){
            if($request->user_id){
                $user_id = $request->user_id;
                $contents_id = $request->contents_id;
                $result_data = Contents::where('id', $contents_id)->first();
                $comments = Comment::where('contents_id',$contents_id)->get();
                $bookmark = Bookmarks::where('contents_id', $contents_id)
                        ->where('user_id', $user_id)
                        ->first();
            } else {
                $user_id = $request->session()->get('user_id');
                $contents_id = $request->contents_id;
                $result_data = Contents::where('id', $contents_id)->first();
                $comments = Comment::where('contents_id',$contents_id)->get();
                $bookmark = Bookmarks::where('contents_id', $contents_id)
                        ->where('user_id', $user_id)
                        ->first();
            }
        }else{
            $user_id = $request->session()->get("user_id");
            $contents_id = $request->session()->get("contents_id");
            $result_data = Contents::where('id', $contents_id)->first();
            $comments = Comment::where('contents_id',$contents_id)->get();
            $bookmark = Bookmarks::where('contents_id', $contents_id)
                        ->where('user_id', $user_id)
                        ->first();
        }

        session()->flash('user_id',$user_id);
        session()->flash('contents_id', $contents_id);
        session()->flash('user_icon',$user_icon);
        return view('/result/index',compact('result_data','user_id','comments','bookmark','user_icon'));

    }

    // コメント投稿の処理
    public function commit(Request $request){
        // $request->validate([
        //     'comment' => 'required',
        // ],
        // [
        //     'comment.required' => '空欄でコメントできません。',
        // ]);
        $user_id = $request->session()->get("user_id");
        $user_icon = $request->session()->get('user_icon');
        $user = User::find($user_id);
        $comments = Comment::where('contents_id', $request->contents_id)->get();

        $comment = new comment();
        $comment->user_id = $request->user_id;
        $comment->contents_id = $request->contents_id;
        $comment->name = $user->name;
        $comment->comment = $request->comment;
        $comment->save();

        session()->flash('user_id',$user_id);
        session()->flash('contents_id', $request->contents_id);
        session()->flash('user_icon',$user_icon);

        return redirect()->action([IndexController::class, 'result']);
    }

    // コメント削除の処理
    public function delite(Request $request){
        $user_icon = $request->session()->get('user_icon');
        $user_id = $request->session()->get("user_id");
        $comment_id = $request->comment_Id;
        $comment = Comment::find($comment_id)->destroy($comment_id);

        session()->flash('user_id',$user_id);
        session()->flash('contents_id', $request->contents_id);
        session()->flash('user_icon',$user_icon);
        return redirect()->action([IndexController::class, 'result']);
    }

     // ブックマーク追加の処理
    public function addbookmarks(Request $request)
    {
        $contents_id =  $request->contents_id;
        $user_id = $request->session()->get("user_id");
        $user_icon = $request->session()->get('user_icon');

        $bookmark = new Bookmarks();
        $bookmark->user_id = $user_id;
        $bookmark->contents_id =$contents_id;
        $bookmark->save();

        session()->flash('user_id',$user_id);
        session()->flash('contents_id', $contents_id);
        session()->flash('user_icon',$user_icon);

        return redirect()->action([IndexController::class, 'result']);
    }

    // ブックマーク削除の処理
    public function removeBookmarks(Request $request)
    {
        $contents_id =  $request->contents_id;
        $user_icon = $request->session()->get('user_icon');
        $user_id = $request->session()->get("user_id");
        $bookmark = Bookmarks::where('contents_id', $contents_id)
                ->where('user_id', $user_id)
                ->first();
        $bookmark->delete();

        session()->flash('user_id',$user_id);
        session()->flash('contents_id', $contents_id );
        session()->flash('user_icon',$user_icon);

        return redirect()->action([IndexController::class, 'result']);
    }
    
    //ユーザー画面の表示
    public function mypage(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $user = User::where('id', $user_id)->first();

        $all_icons =  DB::table('icons')->get();

        $user_icon = User::where('id', $user_id)
                ->select('icon_images')
                ->first();

        $bookmarks = DB::table('bookmarks')
                ->where('user_id', $user_id)
                ->select('contents_id')
                ->get();

        $contents_bkm = DB::table('contents')
                ->whereIn('id', $bookmarks->pluck('contents_id'))
                ->get();

        $comment_user = DB::table('comments')
                ->where('user_id', $user_id)
                ->get();
                
        $comments = DB::table('comments')
                ->where('user_id', $user_id)
                ->select('contents_id')
                ->get();

        $contents_come = DB::table('contents')
                    ->whereIn('id', $comments->pluck('contents_id'))
                    ->get();

        session()->flash('user_id',$user_id);
        session()->flash('user_icon',$user_icon);
//  dd($myIcon);
        return view('/mypage/index',compact('user','user_id','contents_bkm','comment_user','contents_come','all_icons','user_icon'));
    }

    //アイコン保存の処理
    public function change(Request $request)
    {
        $user_id = $request->user_id;
        $icon_id = $request->icon_id;
        $icon = Icons::where('id', $icon_id)
                ->select('icon_image')
                ->first();
        
        $users = User::find($user_id );
        $users->icon_images =  $icon->icon_image;
        $users->update();

        session()->flash('user_id',$user_id);
        return redirect()->route('mypage');
    }

    //アカウント編集の処理
    public function edite(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $user_icon = $request->session()->get('user_icon');
        // $request->validate( [
        //     'name'=>['required', Rule::unique('users')->ignore($user_id )],
        //     'email'=>['required', Rule::unique('users')->ignore($user_id )],
        //     'password'=>'required',
        // ],
        // [
        //     'name.required' => '名前は必須項目です。',
        //     'email.required'  => 'メールアドレスは必須項目です。',
        //     'password.required'  => 'パスワードは必須項目です。',
        // ]);
        $comment = Comment::where('user_id', $user_id);
        $comment->update([
            "name" => $request->user_name,]);

        $users = User::find($user_id );
        $users->name = $request->user_name;
        $users->email = $request->user_email;
        $users->password = $request->user_pass;
        $users->update();

        session()->flash('user_id',$user_id);
        session()->flash('user_icon',$user_icon);
        return redirect()->route('mypage');
    }
    

}
