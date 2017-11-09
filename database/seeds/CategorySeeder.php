<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'parent_category_id' => 0,
                'title' => 'Thể hình nam',
                'description' => 'Các bài thể hình nam tại đây sẽ giúp cho bạn luyện tập toàn bộ các nhóm cơ trên cơ thể, giúp bạn phát triển toàn diện cơ bắp và có được body 6 múi gợi cảm hơn. Đừng vội nản và hãy kiên trì tập luyện nhé. Thành công sẽ đến với nhưng Gymer kiên trì, cố lên nào.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 0,
                'title' => 'Thể hình nữ',
                'description' => 'Hướng dẫn tập thể hình cho nữ dễ hiểu, chi tiết có minh họa bằng hình ảnh đầy đủ để các bạn nữ đi tập gym dễ dàng theo dõi và tập luyện theo.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 0,
                'title' => 'Bài tập yoga',
                'description' => 'Các bài tập yoga giúp bạn thư giãn đầu óc, giúp bạn sống lâu hơn, chữa bệnh hiệu quả và còn rất nhiều tác dụng khác, tập luyện Yoga là một xu thế của cuộc sống hiện đại ngày nay. Vì vậy tại sao bạn lại không bắt tay vào tìm hiểu và  hãy bắt đầu tập Yoga ngay hôm nay để cuộc sống luôn tươi đẹp hơn nhé. Tập Yoga cũng không quá khó khăn với hầu hết chúng ta mà lại phì hợp với mọi lữa tuổi nữa. Từ trẻ em tới người già khi tập luyện các bài tập Yoga đều có được một sức khỏe cường tráng và một tinh thần minh mẫn hơn hẳn những người không tập môn này. Với nhứng lợi ích về sức khỏe to lớn mà bài tập yoga mang lại cho chúng ta như thế thì còn lý do nào khiến bạn không bắt đầu ngay với các bài tập dưới đây chứ nhỉ.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 0,
                'title' => 'Bài viết thể hình',
                'description' => 'Các bài tập yoga giúp bạn thư giãn đầu óc, giúp bạn sống lâu hơn, chữa bệnh hiệu quả và còn rất nhiều tác dụng khác, tập luyện Yoga là một xu thế của cuộc sống hiện đại ngày nay. Vì vậy tại sao bạn lại không bắt tay vào tìm hiểu và  hãy bắt đầu tập Yoga ngay hôm nay để cuộc sống luôn tươi đẹp hơn nhé. Tập Yoga cũng không quá khó khăn với hầu hết chúng ta mà lại phì hợp với mọi lữa tuổi nữa. Từ trẻ em tới người già khi tập luyện các bài tập Yoga đều có được một sức khỏe cường tráng và một tinh thần minh mẫn hơn hẳn những người không tập môn này. Với nhứng lợi ích về sức khỏe to lớn mà bài tập yoga mang lại cho chúng ta như thế thì còn lý do nào khiến bạn không bắt đầu ngay với các bài tập dưới đây chứ nhỉ.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 0,
                'title' => 'Nhạc thể hình',
                'description' => 'Hướng dẫn tập thể hình cho nữ dễ hiểu, chi tiết có minh họa bằng hình ảnh đầy đủ để các bạn nữ đi tập gym dễ dàng theo dõi và tập luyện theo.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 1,
                'title' => 'Bài tập ngực cho nam',
                'description' => 'Hướng dẫn các bạn nam xây dựng được cơ ngực to vạm vỡ và đẹp hoàn hảo nhất, khiến ngay cả các chị em cũng phải ghen tị vì vòng 1 nở nang của bạn.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 1,
                'title' => 'Bài tập mông, đùi cho nam',
                'description' => 'Hướng dẫn các bài tập mông đùi cho nam giúp các bạn làm săn chắc vòng 3 và cơ đùi, để các bạn có vòng 3 nở nang săn chắc và cơ đùi to vạm vỡ.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 1,
                'title' => 'Bài tập lưng, xô cho nam',
                'description' => 'Các bài tập lưng, xô này sẽ giúp cho các anh có tấm lưng chữ V đẹp nhất, không cần phải đi đâu lòng vòng tìm các bài tập lưng làm gì nữa, tất cả nhưng gì bạn cần đều có ở đây rồi đó.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 1,
                'title' => 'Bài tập chân cho nam',
                'description' => 'Các bài tập chân cho nam ở đây sẽ giúp cho các bạn tập thể hình có được một đôi chân khỏe với các múi cơ to khỏe. Đừng vì lười mà bỏ qua các buổi tập chân nhé. Chúng rất quan trọng đấy.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 2,
                'title' => 'Bài tập tay, vai cho nữ',
                'description' => 'Bạn đang muốn giảm mỡ cánh tay để nó trông thon gọn nuột nà hơn?. Hãy tập ngay các bài tập tay dành cho nữ này ngay để giúp bạn có một đôi tay thon thả sexy nhất ngay hôm nay.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 2,
                'title' => 'Bài tập chân cho nữ',
                'description' => 'Bạn đang cần tập luyện cho bắp chân của mình thon gọn hơn, bạn muốn có một đôi chân dài miên man gợi cảm?. Hãy tập ngay các bài tập chân dành riêng cho bạn tại đây.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 2,
                'title' => 'Bài tập ngực cho nữ',
                'description' => 'Bạn đang buồn này vì sở hữu vòng 1 kém nở nang, không hấp dẫn. Bạn muốn cải thiện số đo vòng 1 của mình. Hãy tập ngay các bài tập ngực cho nữ này để giúp vòng 1 của mình được to và săn chắc hơn nhé.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 2,
                'title' => 'Bài tập mông, đùi cho nữ',
                'description' => 'Bạn muốn tăng kích thước vòng 3 và giảm mỡ đùi của mình, hãy luyện tập ngay các bài tập giúp săn chắc vòng 3 và thon gọn đùi của bạn nhanh nhất.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 2,
                'title' => 'Bài tập lưng cho nữ',
                'description' => 'Bạn có nhiều mỡ lưng và nó khiến bạn không mặc được các bộ cánh khoe lưng trần gợi cảm, đừng lo, hãy tập ngay các bài tập lưng cho nữ để giúp giảm mỡ lưng ngay hôm nay và tự tin mặc đẹp đi chơi nhé.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 3,
                'title' => 'Bài tập yoga cho trẻ em',
                'description' => 'Tập Yoga cho trẻ em là một điều vô cùng có lợi cho con em của các bạn, vì Yoga sẽ giúp cho con em của bạn luôn khỏe mạnh để có thể học tập tốt hơn, tăng cường trí nhớ và sức đề kháng để luôn học tập thật tốt mang lại kết quả cao nhất.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 3,
                'title' => 'Bài tập yoga cho trẻ em',
                'description' => 'Tập Yoga cho trẻ em là một điều vô cùng có lợi cho con em của các bạn, vì Yoga sẽ giúp cho con em của bạn luôn khỏe mạnh để có thể học tập tốt hơn, tăng cường trí nhớ và sức đề kháng để luôn học tập thật tốt mang lại kết quả cao nhất.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 3,
                'title' => 'Bài tập yoga cho mẹ bầu sau sinh',
                'description' => 'Tập yoga cho mẹ bầu sau sinh rất quan trọng vì nó giúp cho các mẹ luôn được thư giãn và nhất là khả năng giảm cân và giảm mỡ bụng hiệu quả, chính vì vậy mà việc tập yoga cho mẹ bầu sau sinh rất được các mẹ bỉm sữa quan tâm và tìm tập. Với các bài tập dành riêng cho các mẹ ở đây thì bạn sẽ mau chóng tìm lại vóc dáng thon gọn ngay thôi.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],[
                'parent_category_id' => 3,
                'title' => 'Bài tập yoga giảm cân',
                'description' => 'Bạn đang buồn phiền vì cân nặng của mình, mỗi lần soi gương là chỉ mún đập cái gương ?. Bạn muốn giảm cân ngay thì hãy bắt đầu tập yoga giảm cân nhé. Các bài tập Yoga này sẽ giúp cho các bạn đánh tan mỡ bụng và giảm mỡ toàn thân rất hiệu quả. Chỉ cần bạn chăm chỉ luyện tập mỗi ngày thì một vóc dáng thon thả với 3 vòng chuẩn không còn xa nữa đâu.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
