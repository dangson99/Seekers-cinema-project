
        <div class="banner">
            <div class="datve">
                <form action="index.php?contro=detail" method="post">
                    <select name="phim" id="">
                        <option value="">chon phim</option>
                        <option value="">phim1</option>
                        <option value="">phim2</option>
                        <option value="">phim3</option>
                    </select>
                    <select name="rap" id="">
                        <option value="">chon rap</option>
                        <option value="">phim1</option>
                        <option value="">phim2</option>
                        <option value="">phim3</option>
                    </select>
                    <select name="suatchieu" id="">
                        <option value="">chon suat</option>
                        <option value="">phim1</option>
                        <option value="">phim2</option>
                        <option value="">phim3</option>
                    </select>
                    <input type="submit" value="MUA VÉ">
                </form>
            </div>
            <?php//banner//?>
            <?php
                $i=0;
                foreach ($loadbanner as $banner){
                    $i++;
                    echo '<div class="live" id="banner'.$i.'"><img src="img/'.$banner['img'].'" alt=""></div>';
                }
            ?>
            <?php//banner//?>
            <div class="listbanner">
                <span class="list" id="listbanner1"></span>
                <span class="list" id="listbanner2"></span>
                <span class="list" id="listbanner3"></span>
                <span class="list maubanner" id="listbanner4"></span>
            </div>
        </div>
        <section>
            <div class="tieude">
                <span id="phimdangchieu" class="listtieude mautieude">PHIM ĐANG CHIẾU</span>
                <span id="phimsapchieu" class="listtieude">PHIM SẮP CHIẾU</span>
            </div>
            <div id="listphim" class="listphim">
                <div id="soc" class="soc"></div>
                <?//cho nay la phim sap chieu//?>
                <div class="phimsapchieu">
                    <a href="">
                        <div class="more">
                            XEM THÊM
                        </div>
                    </a>
                    <?//foreach echo phan nay ra//?>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim7.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            BLACK WIDOW : GÓA PHỤ ĐEN
                        </div>
                        <div class="muave">
                            <a href="">MUA VÉ</a>
                        </div>
                    </div>
                    <?//foreach echo phan nay ra//?>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim8.png" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            WONDER WOMAN 1984
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim9.png" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            LẬT MẶT: 48H
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim10.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            VÔ DIỆN SÁT NHÂN
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim11.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            THE KING'S MAN KINGSMAN: KHỞI NGUỒN
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim12.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            MINIONS: SỰ TRỖI DẬY CỦA GRU
                        </div>
                    </div>
                </div>
                <?//cho nay la phim sap chieu//?>
                <?//cho nay la phim dang chieu//?>
                <div class="phimdangchieu">
                    <a href="">
                        <div class="more">
                            XEM THÊM
                        </div>
                    </a>
                    <?//foreach echo phan nay ra//?>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim1.jpg" alt="">
                            <div class="muave">
                                <a href="index.php?contro=detail">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            ONWARD TRUY TÌM PHÉP THUẬT
                        </div>
                    </div>
                    <?//foreach echo phan nay ra//?>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim2.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            NẮNG 3: LỜI HỨA CỦA CHA
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim4.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            THE DUSTWALKER : SA MẠC CHẾT
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim5.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            HONEST CANDIDATE BÀ HOÀNG NÓI DỐ
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim6.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            COMA KẺ ĐÀO TẨU GIẤC MƠ
                        </div>
                    </div>
                    <div class="phim">
                        <div class="hinhphim">
                            <img src="img/phim3.jpg" alt="">
                            <div class="muave">
                                <a href="">MUA VÉ</a>
                            </div>
                        </div>
                        <div class="tenphim">
                            BLOODSHOT
                        </div>
                    </div>
                </div>
                <?//cho nay la phim dang chieu//?>
            </div>
        </section>
        <section class="tinkhuyenmai">
            <div class="texthide">KHUYẾN MÃI</div>
            <div class="tieude">
                <span class="mautieude">TIN KHUYẾN MÃI</span>
            </div>
            <?//cho nay la khuyen mai//?>
            <div class="boxkhuyenmai" id="boxkhuyenmai">
                <?//foreach echo phan nay ra//?>
                <div class="khuyenmai">
                    <img src="img/km1.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>Bắt Kịp Thời Đại 4.0: Bye Bye Thẻ Thành Viên Nhựa</p>
                    </div>
                </div>
                <?//foreach echo phan nay ra//?>
                <div class="khuyenmai">
                    <img src="img/km2.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>TƯNG BỪNG HÁI "SAO" – NHẬN ƯU ĐÃI KHỦNG</p>
                    </div>
                </div>
                <div class="khuyenmai">
                    <img src="img/km3.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>Thứ Năm Kì Diệu Với JCB</p>
                    </div>
                </div>
                <div class="khuyenmai">
                    <img src="img/km4.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>Ngày Tri Ân Của Galaxy Cinema - Ngày Thứ Hai ĐẦU TIÊN Mỗi Tháng</p>
                    </div>
                </div>
                <div class="khuyenmai">
                    <img src="img/km5.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>Xem Siêu Phẩm Điện Ảnh - “Măm” Cực Phẩm Bắp Xào</p>
                    </div>
                </div>
                <div class="khuyenmai">
                    <img src="img/km6.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>Đặt Vé Online - Không Lo Trễ Nải</p>
                    </div>
                </div>
                <div class="khuyenmai">
                    <img src="img/km7.jpg" alt="">
                    <div class="tenkhuyenmai">
                        <p>Uống Milo Cực Đã – Xem Phim Hot Cực Hay</p>
                    </div>
                </div>
            </div>
            <?//cho nay la khuyen mai//?>
        </section>
        <section>
            <div class="tieude">
                <span class="mautieude">CORONA VIRUS</span>
            </div>
            <div class="thongtin">
                CORONA VIRUS là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã
                khẳng định thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp
                chiếu phim hiện đại, thu hút hàng triệu lượt người đến xem, CORONA VIRUS còn hấp dẫn khán giả bởi không
                khí thân thiện cũng như chất lượng dịch vụ hàng đầu. Đến website galaxycine.vn, quý khách sẽ được cập
                nhật nhanh chóng các phim hay nhất phim mới nhất đang chiếu hoặc sắp chiếu. Lịch chiếu tại mọi hệ thống
                rạp chiếu phim của Galaxy Cinema cũng được cập nhật đầy đủ hàng ngày hàng giờ trên trang chủ. Đặt vé tại
                Galaxy Cinema dễ dàng chỉ sau vài thao tác vô cùng đơn giản. Để mua vé, hãy vào tab Mua vé. Quý khách có
                thể chọn Mua vé theo phim, theo rạp, theo ngày tùy cách nào tiện lợi nhất cho bản thân.Sau đó, tiến hành
                mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi
                Đặt vé thành công của Galaxy Cinema. Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Galaxy Cinema
                hoặc quét mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa. Nếu bạn đã chọn được
                phim hay để xem, hãy đặt vé cực nhanh bằng box Mua Vé Nhanh ngay từ Trang Chủ. Chỉ cần một phút, tin
                nhắn và email phản hồi của Galaxy Cinema sẽ gửi ngay vào điện thoại và hộp mail của bạn. Nếu chưa quyết
                định sẽ xem phim mới nào, hãy tham khảo các bộ phim hay trong mục Phim Đang Chiếu cũng như Phim Sắp
                Chiếu tại rạp chiếu phim bằng cách vào mục Bình Luận Phim ở Góc Điện Ảnh để đọc những bài bình luận chân
                thật nhất, tham khảo và cân nhắc. Sau đó, quý khách hãy đặt vé bằng box Mua Vé Nhanh ngay ở đầu trang để
                chọn được suất chiếu và chỗ ngồi vừa ý nhất. Galaxy Cinema luôn có những chương trình khuyến mãi, ưu
                đãi, quà tặng vô cùng hấp dẫn như giảm giá vé, tặng vé xem phim miễn phí, tặng Combo, tặng quà phim…
                dành cho quý khách. Trang web galaxycine.vn còn có mục Góc Điện Ảnh - sở hữu lượng dữ liệu về phim, diễn
                viên và đạo diễn, giúp quý khách dễ dàng chọn được phim mình yêu thích và nâng cao kiến thức về điện ảnh
                của bản thân. Ngoài ra, vào mỗi tháng, Galaxy Cinema cũng giới thiệu các phim sắp chiếu hot nhất trong
                mục Phim Hay Tháng để quý khách sớm có sự tính toán. Hiện nay, Galaxy Cinema đang ngày càng phát triển
                hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn, đem đến cho khán giả những bộ phim bom tấn
                của thế giới và Việt Nam nhanh chóng và sớm nhất.
            </div>
        </section>
        