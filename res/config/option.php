<?php
/**
 * @package minhxu
 * @author  Nguyễn Quang Minh <www.facebok.com/minhffmax999>
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Nguyễn Quang Minh | Resources V5";
    public $description = "Hi my name is Quang Minh / A freelance / web developer / vexer";
    public $keywords = "quangminh,web quangminh,nguyen quang minh,minhxu,quang minh,minhxudz,minhxu home,profile quangminh";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "QUANGMINH | HOME";
    public $avatar = "./res/v5/img/avatar.gif";
    public $userName = ["Hello Everybody", "My name is Quang Minh.", "I really like website design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đâm mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Kỹ sư phát triển front-end";
    public $bio4 = "Thích làm thần tượng tiktok 🥳";
    public $bio5 = "Ăn, ngủ, làm và chơi game 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://facebook.com/minhffmax999", // Thay link facebook
        "instagram" => "https://www.instagram.com/minhxu_28", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/minhxu_28", // Thay link tiktok
        "telegram" => "https://t.me/minhxuiuem" // Thay link telegram
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/THANH_HOA');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "./res/v5/img/male.jpeg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "QuangMinh", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "./res/v5/img/female.jpeg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Ngoc Tram", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "28/03/2024" // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3c4-ee40-7190-8941-6ebce182a829",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-fef769c6-afd6-48ce-9d4d-7736c5fd7741.jpg",
            "title" => "Sau Này Anh Cưới Ai Rồi",
            "author" => "Kiều Chi"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3cf-5a55-7156-a167-e07de9eba7b1",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Bông Hoa Đẹp Nhất",
            "author" => "Quân AP"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3c3-ffa3-711e-ae9a-ac15346e1166",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-ec484b2a-a172-4815-ac46-57bdd12a1230.jpg",
            "title" => "Tìm Em",
            "author" => "Hngle"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3d3-997c-7339-97a3-7fe5230820c8",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-285c75d2-4494-42a1-af89-966fb9f22e73.jpg",
            "title" => "Vùng An Toàn",
            "author" => "Bray"
        ],
        [
            "url" => "https://cdn.phototourl.com/member/2026-09-24-b4857258-5a29-457d-a4e9-44e97efc774e.jpg",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Mùa Thu Và Lời Xin Lỗi",
            "author" => "Thành Đạt"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3de-34e4-7355-9ef6-9a337f41791d",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-b3f20c6b-d831-46b1-be88-2610c5f88118.jpg",
            "title" => "Trở Về ",
            "author" => "Wxrdie"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3e1-ade4-7287-8124-f9af39dca76c",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-241f4361-0998-45d8-8aff-10c1838bb143.png",
            "title" => "Hay Là",
            "author" => "Ngọt"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3e3-29d7-702e-82cb-a9f72122585b",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-79cf66f8-f7f2-4660-994b-0bb387441523.jpg",
            "title" => "Vết Thương",
            "author" => "Fishy"
        ],
        [
            "url" => "https://audio.jukehost.co.uk/01a0d3e9-5b9a-70b8-b968-ffd4872d13d0",
            "avatar" => "https://cdn.phototourl.com/member/2026-09-24-7a6d9b12-1bb8-4b8a-9ff3-6efc515284fb.jpg",
            "title" => "Chỉ 1 Đêm Nữa Thôi",
            "author" => "MCK/NGER"
        ],
        // Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
