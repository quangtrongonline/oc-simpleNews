<?php

return [
    'plugin' => [
        'name' => 'Tin tức',
        'description' => 'Plugin tin tức',
        'author' => 'QuangTrongOnline',
    ],
    'menu' => [
        'news' => 'Tin tức',
        'posts' => 'Danh sách bài viết',
        'categories' => 'Danh mục bài viết',
        'subscribers' => 'Người theo dõi',
        'statistics' => 'Thống kê',
        'import' => 'Nhập',
        'export' => 'Xuất',
        'logs' => 'Logs',
        'settings' => 'Cài đặt'
    ],
    'title' => [
        'posts' => 'bài biết',
        'categories' => 'danh mục',
        'subscribers' => 'người theo dõi'
    ],
    'new' => [
        'posts' => 'Thêm bài viết',
        'categories' => 'Thêm danh mục',
        'subscribers' => 'Thêm người theo dõi'
    ],
    'stat' => [
        'posts' => 'Bài viết|Các bài viết',
        'view' => 'Xem',
        'mail' => 'Gửi',
        'loss' => 'Loss',
        'top' => 'TOP',
        'longest' => 'Bài dài nhất',
        'shortest' => 'Bài ngắn nhất',
        'queued' => 'Đợi xử lý',
        'send' => 'Gửi',
        'sent' => 'Đã gửi',
        'viewed' => 'Viewed',
        'click' => 'Clicks',
        'clicked' => 'Clicked',
        'failed' => 'Lỗi',
        'log' => [
            'events' => 'Sự kiện',
            'summary' => 'Tóm tắt'
        ]
    ],
    'form' => [
        // General
        'id' => 'ID',
        'created' => 'Tạo lúc',
        'updated' => 'Chỉnh sửa lúc',
        // Posts
        'title' => 'Tên bài viết',
        'slug' => 'Slug',
        'introductory' => 'Mô tả ngắn',
        'content' => 'Nội dung',
        'image' => 'Hình ảnh',
        'category' => 'Danh mục',
        'status' => 'Tình trạng',
        'status_published' => 'Xuất bản',
        'status_hide' => 'Ẩn',
        'status_draft' => 'Bản nháp',
        'status_active' => 'Kích hoạt',
        'status_inactive' => 'Không kích hoạt',
        'status_unsubscribed' => 'Bỏ theo dõi',
        'featured' => 'Nổi bật',
        'hidden' => 'Ẩn?',
        'yes' => 'Có',
        'no' => 'Không',
        'view' => 'view',
        'published' => 'Xuất bản vào',
        'last_send_at' => 'Lần cuối gửi lúc',
        'last_send' => 'Gửi lần cuối',
        'length' => 'Độ dài',
        // Subscribers
        'name' => 'Tên',
        'email' => 'E-mail',
        'categories_comment' => 'Nếu không chọn danh mục thì người theo dõi sẽ nhận được tất cả tin tức mới.',
        'comment' => 'Mô tả thêm',
        'locale' => 'Ngôn ngữ',
        'lang' => 'vi',
        'mail' => 'mail',
        // Logs
        'news' => 'Bài viết',
        'subscriber_name' => 'Tên người theo dõi',
        'subscriber_email' => 'Email người theo dõi',
        'queued_at' => 'Đợi xử lý',
        'send_at' => 'Gửi lúc',
        'viewed_at' => 'Xem lúc',
        'clicked_at' => 'Bấm vào lúc',
        'logs_count' => 'Các bản ghi'
    ],
    'button' => [
        'activate' => 'Kích hoạt',
        'deactivate' => 'Bỏ kích hoạt',
        'active' => 'Hoạt động',
        'inactive' => 'Không hoạt động',
        'reorder' => 'Sắp xếp',
        'import' => 'Nhập',
        'export' => 'Xuất',
        'unsubscribe' => 'Bỏ theo dõi',
        'subscribe' => 'Đăng ký theo dõi',
        'test' => 'Gửi mail thử',
        'send' => 'Gửi bài viết',
        'send_confirmation' => 'Bạn có muốn gửi bài viết đến những người theo dõi?',
        'resend' => 'Gửi lại bài viết',
        'resend_confirmation' => 'Bạn có muốn gửi lại bài viết đến những người theo dõi?',
        'return' => 'Trở lại'
    ],
    'flash' => [
        'activate' => 'Kích hoạt thành công các bài đã chọn.',
        'deactivate' => 'Bỏ kích hoạt thành công các bài đã chọn.',
        'subscribe' => 'Đănh ký theo dõi thành công.',
        'unsubscribe' => 'Bỏ theo dõi thành công.',
        'delete' => 'Bạn có muốn xóa những mục đã chọn?',
        'remove' => 'Xóa thành công các mục đã chọn.',
        'newsletter_test_error' => 'Có lỗi xảy ra trong khi gửi thử bài viết.',
        'newsletter_send_success' => 'Gửi bài viết thành công.',
        'newsletter_send_error' => 'Có lỗi xảy ra trong khi gửi bài viết. Vui lòng kiểm tra logs để biết thêm thông tin và trạng thái bài viết',
        'newsletter_resend_success' => 'Gửi lại bài viết thành công.',
        'newsletter_resend_error' => 'Có lỗi xảy ra trong khi gửi lại bài viết. Vui long kiểm tra logs để biết thêm thông tin và trạng thái bài viết'
    ],
    'backend_settings' => [
        'description' => 'Cài đặt về cách gửi bản tin và chế độ xem thống kê.',
        'main_section' => 'Cài đặt gửi và xử lý bài viết',
        'main_section_comment' => 'Các cài đặt chế độ theo dõi bài viết.',
        'click_tracking' => 'Theo dõi lượt click',
        'click_tracking_comment' => 'Theo dõi khi người nào đó bấm vào link bài viết.',
        'email_view_tracking' => 'Theo dõi bài viết đã được xem',
        'email_view_tracking_comment' => 'Theo dõi khi người nào đó xem bài viết.',
        'email_view_tracking_warning' => [
            'heading' => 'Cẩn thận khi sử dụng tính năng này',
            'subheading' => 'Chức năng này bị cấm ở 1 số quốc gia!',
            'text' => 'Khi bạn sử dụng chức năng này, bạn nên chắc chắn những gì bạn đang làm! Đảm bảo rằng bạn không vi phạm bất kỳ luật nào.'
        ],
        'statistic_section' => 'Cài đặt thống kê',
        'statistic_show_posts' => 'Hiện các bài viết',
        'statistic_show_mails' => 'Hiện logs email',
        'statistic_show_longest_posts' => 'Hiển thị các bài viết dài nhất',
        'statistic_show_shortest_posts' => 'Hiển thị các bài viết ngắn nhất'
    ],
    'widget' => [
        'posts' => 'Bài viết - Danh sách bài viết',
        'newposts' => 'Bài viết - Bài viết mới',
        'topposts' => 'Bài viết - Bài viết hàng đầu',
        'subscribers' => 'Bài viết - Người theo dõi',
        'show_total' => 'Hiện tổng số',
        'show_active' => 'Hiện bài hoạt động',
        'show_inactive' => 'Hiện bài không hoạt động',
        'show_draft' => 'Hiện bài nháp',
        'show_piece' => 'Số bài viết',
        'show_date' => 'Hiện ngày',
        'show_unsub' => 'Hiển thị bỏ theo dõi',
        'total' => 'Tổng số'
    ],
    'component' => [
        'posts' => 'Hiển thị các bài viết',
        'post' => 'Nội dung bài viết',
        'categories' => 'Danh mục bài viết',
        'subscribe' => 'Form đăng ký theo dõi',
        'unsubscribe' => 'Form bỏ đăng ký theo dõi'
    ],
    'permission' => [
        'posts' => 'Quản lý bài viết',
        'categories' => 'Quản lý danh mục bài viết',
        'subscribers' => 'Quản lý người theo dõi',
        'statistics' => 'Xem thống kê',
        'import_export' => 'Nhập và xuất bài viết',
        'settings' => 'Thay đổi cài đặt',
        'logs' => 'Chi tiết logs'
    ],
    'settings' => [
        'slug_title' => 'Slug bài viết',
        'slug_description' => 'Lấy bài viết theo slug.',
        'pagination_title' => 'Số trang',
        'pagination_description' => 'Giá trị xác định người dùng đang ở trang số mấy.',
        'per_page_title' => 'Số bài viết trên 1 trang',
        'per_page_validation' => 'Định dạng số bài trên 1 trang không đúng',
        'no_posts_title' => 'Thông báo không có bài viết',
        'no_posts_description' => 'Thông báo này hiển thị khi không có bài viết nào được tìm thấy.',
        'no_posts_found' => 'Không có dữ liệu',
        'posts_order_title' => 'Sắp xếp bào viết',
        'posts_order_description' => 'Xác định thuộc tính để sắp xếp bài viết',
        'post_title' => 'Trang hiển thị bài viết',
        'post_description' => 'Tên file htm sẽ hiển thị danh sách bài viết',
        'featured_title' => 'Thuộc tính nổi bật',
        'featured_description' => 'Chọn những bài viết nào sẽ hiển thị',
        'list_all' => 'Tất cả',
        'list_featured' => 'Chỉ bài viết nổi bật',
        'list_notfeatured' => 'Chỉ bài viết không nổi bật',
        'translated_title' => 'Chỉ hiển thị các bài đăng đã dịch',
        'translated_description' => 'Ẩn bài viết nếu ngôn ngữ của bài viết không trùng với ngôn ngữ hiện tại của trang.',
        'category_page_title' => 'Trang hiển thị danh mục',
        'category_page_description' => 'Tên file htm sẽ hiển thị danh mục bài viết',
        'category_filter_title' => 'Lọc danh mục',
        'category_filter_description' => 'Nhập slug hoặc biến URL để lọc bài viết theo danh mục. Nếu để trống sẽ hiển thị toàn bộ bài viết.',
        'links' => 'Links'
    ],
    'sorting' => [
        'title_asc' => 'Tên (tăng dần)',
        'title_desc' => 'Tên (giảm dần)',
        'created_at_asc' => 'Ngày viết (tăng dần)',
        'created_at_desc' => 'Ngày viết (giảm dần)',
        'updated_at_asc' => 'Ngày chỉnh sửa (tăng dần)',
        'updated_at_desc' => 'Ngày chỉnh sửa (giảm dần)',
        'published_at_asc' => 'Ngày xuất bản (tăng dần)',
        'published_at_desc' => 'Ngày xuất bản (giảm dần)'
    ],
    'sitemap' => [
        'post_list' => 'Danh sách bài viết',
        'post_page' => 'Danh sách trang'
    ],
    'messages' => [
        'unsubscribed' => 'Bạn đã bỏ theo dõi tin tức mới của chúng tôi thành công.',
        'not_subscribed' => 'Đăng ký theo dõi tin tức thành công.',
        'subscribed' => 'Cám ơn bạn đã đăng ký theo dõi tin tức của chúng tôi!'
    ]
];
