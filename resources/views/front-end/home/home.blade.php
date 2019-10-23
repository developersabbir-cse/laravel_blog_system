@extends('front-end.master')

@section('title')
    Home
@endsection

@section('body')
    @foreach($firstSlots as $techcategory)
    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                @foreach($technology as $tech)
                <div class="first-slot">
                    <div class="masonry-box post-media">
                        <img src="{{ asset($tech->blog_image) }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">{{ $techcategory->category_name }}</a></span>
                                    <h4><a href="{{ route('blog-post',['id' =>$tech->id]) }}" title="">{{ $tech->blog_title }}</a></h4>
                                    <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Amanda</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div>
                    @endforeach
                    <!-- end first-side -->

                @foreach($education as $edu)
                    <div class="second-slot">
                    <div class="masonry-box post-media">
                        <img src="{{ asset($edu->blog_image) }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">Education</a></span>
                                    <h4><a href="{{ route('blog-post',['id' =>$edu->id]) }}" title="">{{ $edu->blog_title }}</a></h4>
                                    <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div>
                        @endforeach
                        <!-- end second-side -->

                @foreach($webdev as $dev)
                    <div class="last-slot">
                    <div class="masonry-box post-media">
                        <img src="{{ asset($dev->blog_image) }}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="tech-category-01.html" title="">Web Development</a></span>
                                    <h4><a href="{{ route('blog-post',['id' =>$dev->id]) }}" title="">{{ $dev->blog_title }}</a></h4>
                                    <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                    <small><a href="tech-author.html" title="">by Jessica</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div>
                        @endforeach<!-- end second-side -->
            </div><!-- end masonry -->
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-top clearfix">
                            <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                        </div><!-- end blog-top -->

                        <div class="blog-list clearfix">
                            @foreach($blogs as $blog)
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{ asset($blog->blog_image) }}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="{{ route('blog-post',['id' =>$blog->id]) }}" title="">{{ $blog->blog_title }}</a></h4>
                                    <p>{{ $blog->blog_short_description }}</p>

                                    <small class="firstsmall">

                                        <a class="bg-orange" href="tech-category-01.html" title="">fdfd</a></small>

                                    <small><a href="tech-single.html" title=""> </a></small>
                                    <small><a href="tech-author.html" title=""> </a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                </div><!-- end meta -->
                            </div>
                                @endforeach

                                <!-- end blog-box -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBUSExMWFhUXExcYGBcXGBgaGBgaGxUXGhgYHxcYHSgjHRolGxcYITIhJSkrLi8uHR8zODMtNygtLisBCgoKDg0OGxAQGy0mICUtLS0yLy8tMC8vLSstLS0tLS0vMC0tLS8tLzIvLS0tLS0tLy0tLS0tLS0tLS0tLS0tLf/AABEIAEoCWAMBEQACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAACAAEDBAUGBwj/xABKEAACAQIEAwUDBgsFCAIDAAABAgMAEQQSITEFE1EGIkFhcTKBkQcUI1Kh0RZCU1Ryc5KxweHwFRczYrIkNYKTorPC0nSDNENj/8QAGgEAAwEBAQEAAAAAAAAAAAAAAAECAwQFBv/EADwRAAIBAgQCBggGAQUAAwEAAAABAgMRBBIhMUFRExVhcZGhBRQiMlKB0fBTYpKxweFjMzRCcqJEgvEj/9oADAMBAAIRAxEAPwDDr64+JAGYuFC3BG/jfwFqGykk128ifEQPG2V1ZWHgwIPwNKMlJXTFKMou0lYjpiFQAqAFQAqAFQAqAFQAqBDigB6BCoAegQ4oAVAgqAFQIegB6BCFADigQ4pAEKBj0AOKQBCgY4oAIUgHFACFAhxQA9ADigQ9ABCgAhSGEKRQQoGFSGFQMIUhhCkMIUDDFIYQoGEKQw1pFIkWpLQa0i0SCpKQYpFokWkUgxUlFnZPXf3eFRuzXaIIpiQa1JSDFIosQ6gj3+lRLmXHawwoBBikUSCkMMUig1pMaCkfKpboCfgL1LKRxPCflPw888cCwTBnkRATksCxAB0a9hfpWKqXexu6Vlud+KtmYYpDJFpFBrUjJFpFFPCiSVRJzCgIuqoAbDwzFgcx8hYa+Ohq5ZYu1rkLNJXvYsQTyMWTu5kIu2uXUAghb3919OpqZRirPmOEpO64o+f6+pPjyFOJCN1YGxVgQ3Qg3Bt460pJNWZtClP3luaHEeJviX5rsCSAAQABYbDSppU4045YirVJ1J3nuVqsyFQAqAFQAqAFQB0XAuxeKxShwFjjOzSEjMOoUAk+ug865K2NpUnZ6vsO6h6PrVlm2Xabn92E35xH+y331zdaR+FnX1PL4vIwOPdkcVhFzuoZPF0JIHqCAR62t511UcZTquy35M4cRgKtFXeq5owK6jjOp4N2FxeIUOQsSHYyXDEdQoF/jauKrj6VN23fYehQ9GVqiu9F2mt/djL+cJ+y331z9aR+FnT1NL4vIf8Auxl/OE/Zb76OtI/CxdTS+PyIsR8mmIAuksbHocy/bY1UfSdNvVMmfoeol7MkzkeIYCWCQxyoUYeB6dQRoR5ivQp1I1I5ou6PKq0p0pZZqzIKszFQIegB6BCoA3OIcFUYaLEwMzoxySA2LRyfV0Gx8Pd1FctOu+kdOejWq7UdtXCx6KNWldp6Psf396h8V4ByuTCud8U65njUAhAdQugvm66+F9iKVLEZ803ZRWz5jrYTo8sFdzerXIo8Q4TPBbnRMgOxI0PlcaX8q1p1qdT3HcwrYerS9+NgJsBKjIrIQzhSgP4wY2Uj1NVGpGSbT2JlRnGSi1q9vmSjhU+aROW2aMXceKjzqemhZO++xXq1XNKOXVbkWLwkkTZJFKtYGx3sRcVUJxmrxd0RUpzpvLNWZt4Xg+HTDxz4qWReaWyLGoNgpsSSf3f0OWVepKo4UktN7nbDDUY0o1K0ms21jM4hho1lyQSGZTlynKQST+Ll8TsK3pyk43mrM5a0IKeWm8y7vIkxnBsTCmeSF1XqRoPW23vpQr05u0ZJsdXC1qcc04tIk4xgVjlVI0mGZFIWQKXJJOwTcHS3jvSo1HKLcmvlt5jxFFQmoxUtUt7X17gMbwjEQqGlidFOxI09LjY+RpwrU5u0Xcmrhq1JXnFpEmH4HiXtlhcgqHBAFip2N/OlLEUo7yXIcMHXnbLB6q/yKseEkaTlBGMl7ZLHNcbi3hatHOKjmb05mKpzcsiTvy4k+P4ZNBbmxsl9iRofK40v5VNOtCp7juXVw9Wj/qRaJJeDYhI+a0LhN8xGw6kbgeZqVXpyllUlcqWFrRhnlB2KYrUwNXiHDSMRyYY5r2FkkC8za5JyaWrnp1f/AOeebXetvM66uHaq9HTjLudr+WhWxmBlhIEqMhO1xv6HY1pCpCavF3M6lGpSdppos8G4YcQ5GYIirmdzsqjx9f51Fasqava7eiXM0w2HdaTV7Jat8kacHCsHM3LhxEnMPs8xQEY9BYAj3/bWEq1aCzTirdm6OqGHw1R5Kc3m4XWj8jJOBkHM7h+iNn/ym5GvvFdHSR0132OToZrNp7u/YIYZ8gkynIWyhvAt0ozxvlvqHRyy57aXt8yabh0yBi8bKFIDEjQEgED4EfGpjVhKyT3LlQqQTco2sW+z3DlxEvLZioyFri3gR19azxFV0oZkuJtg6CrVMsnbS4cPBJDiThzpY3ZvAJ9f0I+00pYiPRdIvt8hxwk3W6J+PZzLMnCkTFPCRK6qlxky5r5VNzfS2p+yoVaUqSnom+exrLDRjXlT1aS4WvwKOD4fLKCUjZgNyBpWs6sIO0mYUqNSorxVw8NgZXYqsbEruLbet9jSlUhFXbLhRqTdop3RZweC77rIkl1QmygAgi2pzfi/yrOdT2U4tbmtOl7TjNPRcP74EeEwkkmiIWtvbYe+qnOMPeYqdOc/dVwzhnD5CpDE2yka+VLPFrMnoV0clLK1qTnh8oUsY2AF7m21t/d51HSwbtc06GoldohFUQWIDfunx29aiXM0jyGtQAa0ikGKRRYOgt4nU/wFRu7l7KwwoBBikUSCkMMUig1qWNGRxPi8gMywxRy8mMNLnlye0pbKAEa5yi/eKjUa72zlJ8DaMVpfieU9leGpHxKKTM2VcRDo1rXbOo1t+K/LHqRXJTleR21YJRdj3gV1nCGKQzzX5Ue2eMwGKijgdVRoQxzIrXbmMDvrsBWc20axSZ1/ye8VmxWAjnnILs0guAFFlkZRoPIULYGtTploAysdiGwcDPdWijXxBDqL2A7uj6kAez5nxrWEVVmlxf38vMynJ0oN8F9/PyOS4X2/vOxeMqjEd8anQW7ybZbW0BuOrV3VMD7Ks9vvf7+R59PH2k21vx/r7feZnYrgMM8UkkgzEMUUE2Ud0G5trfWujGV505KMTlwOGhUi5SOA7QcHlw+IMLIbgA73BB8QenrXVCoqkc0SrdHpN6lvCRlUVTuBWqPNqyUptomoIFQAqAFQA6ISQACSTYAakk7ADrQ3bVgk27I9K7H9gQtpsWAW3WLcDzfqf8u3W/h42L9IX9ml4/Q97B+jVH26u/L6noQryj2CtBxCF2yJLGzDdVdSfgDVunNK7TIVSDdk0TyIGBVgCCCCDqCDuCOlSm07oppNWZ5lwHssg4vLEReKD6RQdQc1jGp62zf9NexWxTeGUlu9PqeHh8FFYuUXtHX6Hp9eMe6U5eK4dWKtPErDcF1BHuJrRUqjV1F+Bm61NOzkvED+2sL+cQ/8xPvp9BU+F+BPrFL4l4osYXGRyX5ciPbfKwa3wNRKEo+8rGkZxl7ruc/8oPCVmwbvbvxAup8bD2x6FdfUCuvA1nCqlwen0OH0lQVSi3xWv1PH6+hPlRUCHoAegQhQB2Hya4lhiHi0KNGXKkXGZCCreo/rYV53pGK6NS43/c9b0RN9I4cLX+a2F2TxbzHGEN/tUsV42vYk3JdVPgfZt0t5UYqEYKnp7Cev8Bgqkqjq6+3Jafzby+0SxQzw8PxIxmYB8ohRzdjJcklRe4Gx9xqXKE68HS4b25FqNSnhaixHHZPe5c4jwqWeXAzxLmiEMAZ7iy5Wu17nof4VFOtCnGpCW92aVcPOrUo1IK8bR17ixHiGjxnE5F9pYcw8iEBB+NQ4qVKjF8WaKbhXxElul/BwWIxDyMXdmdjuzEk/E160YqKtFWPBnOU3mk7s63ggx6YZOXHHiIGueW2V8upuCLggne2oF/CvPreruo8zcZLjserhvW40VlipwfDR2+/mX4oMPBxOKyrEzQXKXBWOZgbC+21x7x1rJyqVMM+KT35o3jGjSxkdEm47cFJ/f3c5/iHDsekUrTcwJcczNJo5voQL97XpXXTq4eUoqFr8NNjz61HFxhJ1L243e50zyovFYc9hfCKEJ8HOYDU+O499cKUnhZW+LyPTlKMcdDN8GnfqUsSHhw2JDYecK62ZppkYBye64FhmOaxuOlbRyzqQakrrkuHIwnmpUaicJWe+aSevPt+RBxrGSInDwjso5EbWBI17oubb6VVGnGTq3XFmWIqzhGgotr2V/Bqy647iCRkLO8UYi1sT9EpcA+BOnwv4Vgv9GlKXupu/jodcv9zXjD32lbw1t5GFhsNiIXw7YvOIRiBpI17N9bKTt5+vXXqlOnOMlS963BHnwp1qU6csRfLm4vjzOhlzxYmaX5vO4KuWZpk5LJboVta2wvcVxrLOnGOZLbg73PSlnp1pzySe/wDyWVo8/O1ewfNvY7ziEkq8TmMcXNvAA6ZspKkLfKd7+leTTUHho5nbXR9p9DWdRY2bhHN7Kur207DG7SYFY1hcGVc4f6KU3aOxG2uimurDVHJyTtpbVcThxtFQUJK6vf2ZO7X9B9l3VknwxYK00YCE7Zheyk+d/wB9LFJpxqWuovUrAtSjUot2clp38iThXZ6dJ1eVeWkbh2dmW1lN9CD42qauKpyg1B3b0t3lUMDWjUUprKk7t3XAu4ST5z8/EQu0nLZF2LBWbXX0HxFZTXRdFm4Xv8zenL1jp8m7tbttf7+ZFjcI8WAhVxlb5zcjS4urWvbxtr76qE4zrycdspFWnKnhYRkrPN9Qe2eMdsS8eY5FC2W+lyoa5Hidd6eCpxVNStqxekqs3WcL6K2nyuB2Q/xn/USf+NVjPcXehejv9V/9X/Ajx5mw6xW75sjSeLRj2VvvfUg/zo9WSqOXDe3aHrknRUOOzfNcvv8Ak2x/vOb9Sf8AQlcn/wAWPf8AyzuX+9n/ANf4RT4KjvBGjwu0eclJImsykmxJF/A31Na12o1HJSV7apowwqlKlGMou19GnsSYWJ158fLaePm95kaz5hrfe5/de9TOSeWV8rtx2NKcZRzws5RvunrcnwuG5eJmXMzf7Mx7xuwvl7pPUC32VMp5qUXa3tGkIZK0le/s8dyvAjvg0WG5Ku3MVTZjc90+Ytb+hVycY1m58tDOClLDpU+D1/gttcNhEkN5Q+utyFLd0E9dvhWWjVRx2NtU6cZ+9fyCwMzNi5lLEi0gsTpYGw0oqRSpRa7B0pSdeab5mCtdZwokFIpFk2bW9j4/fWeqNNHqOIx9YfbRd8iklzJEUDW9/Kpd2UkkNe5vTAMVI0GKRRIKQwxSKDzAC5NgBcnpUspHlnbrjOBkBGHRec0itJIvdz5Te0mXV1PRgfdvXn168donp4bDy0lJnIYLDJJLafFvEiFmWRcz3YsGNo1IKEnUnqNq5ozV9zslTdtj1vs92+w0rrA0l3NlD5SoY7C4OxP8fCuyniE9GefVwriro7UV0HMeP/KxixJxBI9CIhhx6EzCST3BQl6xnubQWhpdkOLvBDlSaaV0xSqcIkeZUgdgWfRC2gZmBUgXstuomOS1PWRVEFPj3DPnOGkgzZc4Hete1mDbe6rpVOjmp8iK1PpIOHM4XhnYPEcwq4VVB9u9wfQDU++1enLHU1G61fI8dej60pZXouf3/RxOCxskLZo3ZDaxKm1/XrXpTpxmrSVzy4VJ03eLsVX7/eclidSW11+/zqrJaIHN3GQWNrm1gdfDU+NAnqrklBIqAFQBa4Zw6XESCKJSzHpsB4knwHnUVKkacc0noaUqU6sssFqeu9kux8WDAdrSTkavbReoUHb13PltXgYrGSrOy0j97n0mEwMKCu9Zc/odDicQkaF3YKqi5YmwArkjFydludkpKKvJ6HlXbDty+IvDh7pDsW2aQf8AivlufHpXuYTAKn7U9X+x8/jPSLqexT0X7nK8MlKTxspswkUgj9IV3VEnBp8jz6MnGpFrmfQlfKH2RzfDP964v9TB+4111P8AbQ72cdP/AHM+5GvxuUphpmU2ZYZCD0IQkGsKKTqRT5o3rNqnJrkzwGvqj4xmlwTgc+LcrCl7bsdFX1bqem9Y1q8KSvJm+Hw1Su7QX0PQOw3ZKfCTtLKygGMqFUk3uQbnQaC1eVjcZTqwUY8z2sBgalCblN8LHS9qXAwWIJ/ISD3lSB9prjwyvWj3o78W7UJ9z/Y8Mr6c+NFQIegB6BCFABxSMpupIPUEg/ZSaT3HGTi7p2EptqKGJOxJNOzm7szHqxJP20lFR2RUpylrJ3HXEMFyh2C3vYMbX6260ZVe9gVSSVk9B+e2pzHvb6nX160sq5BnlrruCDTJJYcQyaq5W++ViL/Ck4qW6KjNx912BLX3NOxLZLJiGYAM7MBsCxIHpc6VKilsipVHLSTv8wXkLe0SdLam+nTWmlbYTlfdkkmIZgAzswGwLE29LnSkoJbIJVHL3nf5jGQm1yTbQXO3kOlPL2Cc72ux2kJOYsSepOum2tGWytYTnd3b1ClmZjdmLHqxJP20lFLZDlUctZO/ewue2XJnbL9XMcvw2oyq97ah0jtlvpyvoCDRYWZEvON82Y5utzf470sulrF9Jd3vr3hNKWN2Yk9Sbn4mhRtokNzu7t3FQF0SvOzABnYgbAsSB7jUqKWqRbqOSs3f5jxyEG4JB6g2PxFDV1ZhGVndMIyE7sTrfc79fWllXIrO3xHLkm5JJ6k3NJK2wOV9Ww43I2JHobUNX3KUrbMcUBclErXvmN+tzf41OVWtYrO73uFFIy+yxF97Ei/wpOKe6KjJrZkkTlTdSQeoNv3Umk9y4ya2YaOd7nXfXepaLUnzDicg3BIPUG37qTSe5UW09CQMb3ub9fH41Nik3e4asb3ub+tJpFpsIUhkgpFIMUikGtSUgxSKJBSGgxUlBikUEzgAkkAAXJOgHvotcd7asqHjmFG+IiHrIv303TnyJVWHNFHtXj0OAd43V0LKpKMCCCwuLr8KwqppanTQactDgMRNFOVWRe6PHQN8a8as22e9RjaJzqcUSVoYZYohGrAM0aKsrAC2sh3+y9KMdNSpb6D9psXDHEvIiCMr3Vx7VhuCR7V9N61glcxqXSPYe2HbNOH4OJzZp5kAjTq2UEsbfigkepIFd8pWR5cY3Z8+z8WxDySStKxeRXEh3usntr0APlWDd9zpUTr/AJL+2UmDxDc27wuEV23ZQui2PiQCdPEX8qqLJnHQ+ioZAyhlIKsAQRsQRcH4VZiVOO8K+dQ8rmNH3lOZd9PA6jT+VaUavRyzWuZ1qXSQy3sS4PHfTnDZJbpErc1h3G2Fs3i38+lKUPY6S61exUant9HZ6Lc8Er6g+PI7EbWPrp9tA9HuOia3JufsoBvgg6BCoA2uzPZqbGvZBljB70hHdHkPrN5fG1c+IxUKK135HVhcHPEPTRcz2HgXBIcJHy4l/SY+0x6k/wANhXz9avOtK8j6ahh4UY5YIfjnGocJHzJWt9VR7THoB/QFFGhOrLLEK9eFGOabOSl4Ji+KDmYhzh4d4oQLn9JgSNbdfPQePcq9LC+zTWZ8X9Dz3h62L9qo8seC+pF/dcn5y3/LH/tVdav4fMjqePxPwLfC/k3hilWR5mkCsGC5QoJBuL6m48qzqekpyi4pWua0vRVOE1Ju9juK809Q5TgWJEnFcaV1CpEnvUEN8Dce6u6tFxw1O/acFCalialuFkbfaH/8TEfqJf8AttXNQ/1Y96/c6cR/pS7n+x5Z2S7HyYsiR7xwfW/GfyUH/Vt617mKxkaWkdZft3nz2DwEq/tS0j+/cetcPwMUEYjiUKg2A/eT4nzNeDUnKcs0nqfR06cKccsVZEk+IRAWdlUDcsQAPealRcnZIqUoxV27Hmvb7tak6/NoDdLgu/g1jcKP8oOt/EgW8/ZwODdN9JPfgeB6Sx8ai6KntxZw9eoeMKgQ9AD0CEKAHFAixDhrrmLBRe2vjUSlZ2NI07q7dj1LsTgYmwaZlRiCRmtvrf8AjXzWKbdee+/PsR9hgopYanotuXazanwuFS2dYlvtmyi/xrFJva/izqUM20fIlXh8BFxGhB2NhRbtfiyXFcl4Bf2fF+TT9kUfN+LDLHkvAAYaC4GWO5BIFl1Atcjra4+NFn2+LDo1y8h3wcAtdIxc2FwBc+A9aNeb8WCguC8hhgICSOWhI30Gml9fdRrzfix5UuHkI8Lg/JJ8BRrzfiw05LwRA2DwndusXeNl1XvHoOpp2fb4stKXLy/oabh+EUgMkYuCddNBa5v4DUfEUrPm/Fgsz2S8EEeE4WwPLSxtY9b7W60a834sMz5LwX0GHBcKbgRIbGx8jYGx9xB99GvN+LHnkuC8F9AG4RgwcpSMG4Fr663tpfxsfhT15vxY887XsvBfQc8GwmbLy0zWva+tutr7Ua834sWeVr2XgvoRrw3AlSwWIqDYtmFgehN9KftdvmO872t/5X0JJeDYRRdo0A6k2HxJpXlzYlKT2S8F9ATwjB58mSPPa+W/et1te9qd5c2F5WvZW7l9BR8IwbMVVIyy+0AbkeovpRmlzYNySu15L6Cn4Pg0GZ0jUbXY2HxJoUpPZsSzSdkvJfQM8Cwtr8pbWve5tbre9GeXNiu+S8F9AYeDYNxmREYdVNx8Qaeea4sbunZpeC+hGOG4EgsBFZTZjn0U+ZvpTzT5seWW2Xy/oH+z8BlzfRZb2vn0vva+bejNU5sMkr2y+X9EzcEwgXMY0y2ve5tbre+1HST5si2trLwRG3C8CEDlYwh2bP3T6G9qM9Ta7KyO9suvd/QT8IwQ0KIO7m1a3dG7b7edHSVObEot8PIUHCME98io1t8rE2+BpupUXFhKDjuvIwO0uCjilURrlBS5Gu+Y9a7MJNyvdnnekUuji7cf4MsV2HlIkWkUgxUlEgpFIMUikSIpJsNzoKlu2rLim3ZFyHBlo5GvYxi9iPW/7jWE6tpJLidEKOaLb4EESszhFW5Ks24FgpUHf9IU6lTITSp59gkJuQy5SCBa4O6qwOnk1Km7xuVUjllYlFUSVuMIWw8oAJJjbQWudNhcgX9SKcZZHm5CnDPFx56HmPF+weMYZ0XMtr6JLe3oEq6mKpz2Jo4SpBanXdmezbnhgwspKl5i11GoANwbNb6vwrmryUldHVh4uErMp4jsNIh7sw/44Zl+1VYfbXlzwk5axa8T2qeKilZo5fDfJ5iA4bn4XRts09/hyK09VqWE8TC+lyz2n7BOMNJK0xPKhlkISCUg5ULWLuFCjTfX0ojh5R1bXiRPEJqyRR+U6Nzj8MzBuWmEw+U2OW+rFQdr3I+ytKjOegr3Ocm442HLjCkx82LLNcA5jdrEXGmjbjxrKyZvaxeXi8SYQRwoUUxgPf8AGfKLtc+ex9KtMmSPevk9v/ZeEzbmBTr4A3IHuFhWq2OV7nSLSGSLSGfOlfWnxQqAFQAqANvszw7DSPmxU6xxg+zc538tB3V89+nWubEVakVanG7/AGOvC0aU3erJJcuLPUcL2m4dEgjjnjVVFgouAPsrxZYXESd5Rdz6COKw0VaMlYpcc7e4aKO8LCaQ6KovlHmx6eQ1P21pR9H1Jy9tWRjX9JUqcfYd2Y/BMRgzL86xuLjlxB1VdSkXiABa1x8AfPU71o1svR0YNR82c9GVFy6WtNOXkjqvwvwP5yn2/dXF6nX+Fnf67Q+NC/C/A/nKfb91Hqdf4WHrtD40Me2GA/OU+37qPU6/wsPXaHxo57tF8osQQphbu5FuYQQq+YDak+ot67V10PR0m71NFyOHE+lYKNqWr5mL8m3F4YJZ2nlC51Wxa/eN2J16610ekKM5xioLY5vRleEJSdR2vY7DjXanBPhpkXEIWaGQAa6koQBt1rgo4WsqkW48UenWxlB05JSWzPHcx6mvoLHy12PmPU0WFdivQJsVMQVACoEPQA9AhCgCSCIswUbk1LdlccYuTsibFygkKvsroPPqffUwXFlVJXdlsj1P5OT/ALEPJ2/cK+bxX+4qd/8ACPscF/taX/X+WaXGoJGeJkVyFz3ycrMLgW0lNvCoi0d9GUUmn2b3/gzxgcQsaqFe4iyx5JAojfO9mcBgG7pQm2YaMANdaurmuem5Xut9dN12efLgXDh5+dfv35oOfP8AR8q2qcvN7W/4u+t6m6sZ5oZOG21tb9/9lTDcIfKilZFyJOCeabliY8hBD3Cmx001Go11pyRpKtG7d1rbh334F/HYF5YYUcEnMhk1AIspubg7hulSnZuxlCahKTXbYprgsQC+cM4MyluWwRpEEIUNfMLHMASLjY203d0aOdN2ty48Hcv4OSaOIBo3cjX2kLWLtZbs2rKuW5O/gTUuzZlNQlLRpeP3qZxwUuRIzASCLyOpiLAcwuIgWYbX1YX8tTcXdb3Nc8buWbu35Wvt98TQfDmVZnK3LKyIpH4q3sddiza36ZelRe1jJSyuK+b+/viLE4N2ghQXDK0RJGW65Rqdbg299CauwjOKnJvtKM2BnHMAzuGmzZwwViORGoNo3jFswI9wNjvVXRqqkHbhZbfN80w4MFOWRnXvWwxc3XdVfmbHwLD46UNrh2ilOFml+b+LFjjPD3kbuAAnDzIW0Fi2TKD420bbalGSW5FKoorXmn+5WxGBeRZyIeXmw/LVCUuzgNY90kAC9gSfE7U00ralxnGLj7V9b312LfFMFI8Ti4a4XIllGUgjXMT60otJkU5xjJMryYGTOy8vfErKJrrYKCptvmzWUpa1rHfcU7ryKU42vfha33p2jwZ1kaVsOyBVZUVeVYhnUknK9y7EA2tYa7k0O1rXCVnFRUr89/oS8awsjPG6hyFWQEJy8wLZbH6XS2hHXXoTSi1YmjOKTT7N7/wLFYOdsOVLKxMIUoAAM1hmIa487A6beFCauEZwU7rnuHwnDuqy51bvvcZsgdu4q68vujawt4b60Sewqsk2rcPr26mb8xm5LosbhQIQobk8zuSAkBlOVlCjTP41V1e5t0kMybfPnbVfexZ+aTPyrBlKyOSZVhOhjIHdiYAi5t1pXRGeCv3cL8+0tvhTFhuWkfOK7KcoBObNfWwAB1t4WFqm92QpZ6l27FGDBuhSQws9udnQ8oHNIytnAzlQuhW2a4B8daptbXNHOLvG9ttddlw2uTYHhzxtASoOSCRWtbcmMqmu4ABA8NPCk5J3JnUUlLXdr+dS5wnDFELOAJJGzuBbQnQLp4KoA9xPjSkzOrJN2WyOe7Zf4yfq/wDyNdeC95nn+kf9GP8A2/gwxXoHjokWkUgxUlEgpFIMUikTYdMzKv1iB13NtvfWVX3GbUffRdwN44JkzAnIVJIN2sjXIsdOtcs94fI7Ke0/mLha3l23jZb9Mzxj91/hV4l6IjCrVj8RBGIlv4spHpy0F/ipHuooP2BYhe2RitTIljwvNIjvYNe/W1tR76xqysjejG7OnVbAAbCuQ7DElwyxToF2dmcDwBynN6C7A/GrcnksZ5bTuaGew109T186k0SuArAbE+83pDszD7d/7rxn/wASf/svTEtQeF4UPbVgeXFfKf8A+SbqdD8DTzaijsFjOysDtd1V/NoMKx+Ji/fRePwrz+pV3zLGG7PQxiyBUt9SLDp/pj/dTTjwihXfM1oFsoGpsLam595PjTZBOtSMkWkM+dK+tPihUAKgBUAavZvhAxMpV35caIXd/qjQD3liPtrDEVnSjdK7eyOnC0FWnZuyWrZdwHZsGTFJM0g+b2uI0DM12yghSR4WPoazninlg429rmbUsGnKanf2eS3Lqdjk5jgvKyjDxzqqxfSkOxXIYyfaFutZPGuy0W7W+mnaar0fHM7t2sntrr2FJez8bznDq0ySGLNGJ4xGXcZu5a+gIGjdb1r6xJQzuzV9bO+nMy9VhKfRptO2l1a75Gdx3h6YeUQq+d1Ucyw7qyeKKfG21+ta0ajqRzNWXDuOfEUo0pZE7vj38jQ4hwPDQ54XxBGIRMxGT6ItlB5YYG+bXe1qyhXqTtJR9l9uveb1MNSp3hKXtJX207izhexzvNh1HM5UsCyNKIyVQtGzZb7bgDU+NRLGqMJPS6drX31LhgHKcFrZq7dttBYXsxGcPDK3zpuYhY8mESKtmIsTmFtqJYqSnKKy6c3YI4KHRxk8zvyVxoeyWfD4aVJCTNKqsth3FZnAffX2DQ8XlnKLWy8RLAKVOEovdq/Ynx8h8b2UCvMschco2GVLgAPz9r9LaUQxbai5LfNf/wCoTwKUpKL2y27cxU4nwvCxiRFxDGaI2YNHZHINmCEEnQ333rSnVqyabjo+3bvMq1CjFSSn7Uea0fcFiuzpTBLic93sjvHb2Y5Cwje/mV+2iOJvWdO2m1+1boJ4PLQVS+uja7HsyjxjhwgMQDFuZh45drWzi+X3VpSqZ79ja8DCvRVPLruk/E2eLdmI4ISxkkzBFYPy7wSZgO6sik2Ou7WvauelipTlay7r6rvX0OqvgoU4N3d9729l9zX8nM13HmioEPQAqBDigC5h+7EzDcnL+iD4++s5aySZrHSDaKoqzE6Hg3aybDRcqMLa5Ouupt91eXW9G9JUlPPa/Z2WPdw/pnoqMabp3yq1724t8u0v/wB4GK6J8Kz6p/yPwRr18vwv/T+hLhu3WKZgtl18h8amXouyv0nkioenFJ26L/0/oC3b7E3OiHXe2/2U+qvzvwQn6dX4S/U/oOO3+J+qnw/lT6q/yPwQuvV+Ev1P6Djt9ifqp/XupdVf5H4IXXq/CX6n9Bx2+xP1U/r3UdVf5H4IOvf8S/U/oOO32I+qn9e6jqr/ACPwQde/4l+p/QIdvsR9RP691Pqr878ELr3/ABL9T+g/4fT/AFE/r3UdVfnfgg69/wAS/U/oOO30/wCTT4/yo6q/O/BC69/xL9T+g/4fT/k0+P8AKjqr878EHXr/AA1+p/QIdvpvyafE/dS6q/O/BB16/wANfqf0CHb2b8knxP3UdV/nfgg68f4a/U/oOO3s35JP2j91HVf534IOu5fhr9T+gQ7eS/kk/aP3UdV/nfgHXcvw14/0EO3cv5FP2j91HVn534B11L8NeP8AQX4dyfkV/aP3UdWL4/IOuZfAvH+hfhzL+SX9o/dS6s/P5Fdcy/DXj/Qvw2l/Jr8f5UdW/n8h9cv8NeL+gvw0m+ovx/lR1b+fyK65/wAa8X9BfhlN9Vf691Lq38/kPrn/ABr9T+gvwwn6L/Xuo6u/P5D65X4S/U/oL8Lp+i/D+VHVy+PyH1yvwl+p/QX4V4j/AC/AUur/AM3kUvTEfwl+p/QIdqMR1X4Cjq9fF5Fdbx/CX6n9Bx2mxHVf2RS9QXxeQ+tY/hr9T+hUx2PeYhntcCwsLVtRw/RNu9zDFY3p4KCjazvvcgFbnGiRaRSDFSUSCkUgxSKRa4d/ip+mv7xWVX3GbUffXeWHGkvrJ/oauWe8O5HZDafey5wFVvckZi2guL2UdPVjU15XlYrDRtC/MXH1tIjaWN03uSQM6g6aWAkp4d62FiY6Jj4Lg8LIp5khbICRzW6AnS9ZupK+5oqULbAYUCKcgZmCltzc2yjxa3U05tuKbFBJTaRs4TFcwXCkDTfKf9LGsjY435S55FwJkV2V1vlYEBh9JHsUPlTekWwSvNI884d2xx9gDiSw6Mkbfay3rzJ16i4/sexTw1Nrb9y3H20x99Jh4/8A6ov/AFpPE1Lbl+qUuXmc52r7Y4+SNonxDFHVgyhUUEEWIORRpY7VtSqzluzCpQhDZHoi9sosNj1wjwyMzRwZWQKdWhXSxII28665OMJOT4nnU6cpR0On4R2hixiM0DFgGA1Rltpe12393WlGalsVOm4WTLOIxjIVFwc2b4Aan0pSqZWu0mMMyYEXHQAMyn2c2nS9CxEWr9l/kDou/kbODxAkXML+/wB331re5laxZWgZ86V9afFCoAVACoA2eFcdOHw7xxxqXkdS7OFdSig5UyMLXzG9656uH6SalJ6JcOZ1UcT0VNxitW+Ouhfn7Xlua6oyTSwRxtIjZe8jf4gsLi66Wv4VisHaybuk27dj4G8sfdSaVpNJXXNcSnwbj/LM3O5kvORVLCQhxZr3zkE1rWw+bLksrdmhlQxWTN0l3ft1JIeOwxSNLDFJzOVkjaWQPy2N7uO6LnKbAevWpeHnKKjJq19bK1+wpYqnCTnBO9rK7vbtKPHeJriXWXJkkKgSkHuu4Fs4Fu6T4itaFJ01lvdcO7kY4isqslO1nx7XzNDG9oIJc8r4UHESR5GYteMHKF5gjto1gPGwrKGHnG0VL2U/n3XN54unO83D2mrdnfYPD9qymIw8uVskMCxGPPo5WNlzbW8QdvClLCXhKPFu97doRxuWcJa2irWvvpYaLtBCYIYpI5rxIVvHNkBuxOoynrSeHnnlKLWvNXHHF08kYyT05OxPw/thyYxGsZ0w7xglhoxdmR9vxcxFqU8Hnldvjf6ocPSGSOVLg18+DIZu1N+aUTKznClSTfKcP1FtbkVSwuyb2zf+iJY7WTS1eX/yBjuM4aTmMMLaSZgXYvmC9678sFe6W11O16cKFWNln0W2nhcU8TRld5NZb6+Ni3L2yLvIHhTkSRmPIAocLlsn0lrm29ZrBKKVn7Sd78L9xo/SOaTTj7LVrcbcNSnjuLYaaNM8MnMTDpEGEgC3RbBsuXrra9aQo1ISdpKzbe3MxqYijOCUou6ilvyRZbtLEIpVjgZGliMbKJDyFuAGdYraMbddL/GVhZOScpXs77a/NlvGwUJKMbNq1r+yu1I5uu080VAi3hRlUyH0UdT4n3VnLV5TWHsrMxfP38v2RR0aF00h/n7+X7Io6OIdNIspKCA/ge5IP3NUNW08C1JNZvkyliISjFfgeo8DWsXdXMZxyuwIpkj0AXB3I/8AM/2L/Os37UuxGvux7X+xWFWZjigDU4NwsT57vkyZWbS9o9eY/wDw6aedYVqvR20vf9+C+Z04fDqtfW1rN93F/Ivjs13zEZLSKA7CwsI+cUL3v4Jlk9DWXrXs5ktNvna9vHQ39Q9rI5arX5Xtfw1Eezf0ghEl5GVnUW0KCUIpvfxTM/oBR617Oe2m3ztf99A9Q9vo1L2t13Xt+12QY7ghjaNVYyc1+5lG8ZyCN9ToWLEWNhpvV08RmTbVrb9+t18jKrhMjik75npblpZ/O5Zl4BGBn5rGMRPJ3VRm7kiIw7rlfxr3vpbWoWJk9La3S8U3yNJYKC9rM7Wb2TejSeztxCTs4mpabKpaMISEBGeMOM6s4tYECy3J1tSeKeyjrrffg7aafuNYCO7lZOyW3FX1u/JXZHh+AZ0iYSH6Vgo7uxGfOb31Fk7tva12saqWJyuStt/Vv315EQwWaMWpe9pt33/b2eYWCwOHZJCTLbNAFZkAcF2kUjLnsR3RrfwIpTqVE1tx46aW7B0qNGUZau142bWura52FNwIJGzNKAw52Ud0A8pypGrZrkqbWBA0vvQsQ5SSS0081flYUsGoQblLX2uX/F25317EWjwCLPk5z354h/w1tnZcyn2/Z3v41HrM7Xyra+/DwNvUqebLmfvZduLV1x25lf8As1MiyMSFEMRIjXMxaRpADZmt+JqdPAWq+llmcVvd7vlbs7TLoI5VOW2WL0Wt2329n9Dw8IBiLliGC5wrBRmQSBL2Dlh7xbQjzpSrtStbTb52vysOGFThmb13tpqr2538g8fwxBzmQklZpBywB3UEuQE3bMRqBcA+ANFOs3lT4pa9tr9w6uHis7i9VJ6cknbnf5pMjXhotGCzcyQKVGXuAGTJ3nvcHxOmmgpuq7t8F47XJVBWim3mlbhpq7av+uwfGcPVVzqzlRI0bZkysCoBLAXNxY+NreO9EKrbs7bX35hUoqKzRva7T0104rXY0ZuGwB5ku4CzRIpsCRm5gI1bVdAbnXTasI1alovTZvwt2HVKhRUpx10cV437djFmiyOyb5WK/Akfwrri8yTOGUcsnHk7DCmIIUhhrSKRItSWg1pFokFSUgxSLRItIpBipKJBSKQYpFI0uDFFfO5AttcqBfrdiNq5MRPSyOzCw9q7J+JSR2keMgjI7NlIIB5b31U+PT765sz0vwOzIvatxDwalGWTnWj5eXKBe7ZRc6C/tEneperKSskScexEZwskpYAIVcGxvdSNLWB1F18dDTi3GVxTSlForcH4jHYv84jeMooUBkFjYZhdm32FqTQ0wJcWuZpvaiPMDFGQkdwA6q2/21V9EiUtWyh2Q7YYGWJzDzVAlFxO8YYkqNQWktlt59dKmzZV0gO0zLjcNLFD3rLdWGTKzZs2UZTv3Re/UUpQbi0OM0ppnhbcbMbFcpBUkEEag9CDqD5V57wze56ixdth14wy947foip6FPQv1mS1Y3DlbiGKiwy6F3sfJd3bTooJranRyswq4m6PRO1/CzHxrD4kgcp4yASbZXiifu3IO62I62NbYmm5LQww1RRWVnbdj4cOmFCYeRZBmYuQwJDk94G3iPZ9AKdOOWNia03OTZnY7FLI7XupdjGrDRsgsW0Pha1/0WrmlKMm7pp7ff3zNoqUUra8SESFiAGH0jKMp0ZY0bUAeNrMCf8AJ5mjo83uu97dmiDPl3W37noGAWyKPG2vqdT9prvOEtLSGfOlfWnxQqAFQAqAFQAqAFQAqAFQAqAFQAqBDigB6BCoAegQ4oAVAgqAJIIi7BR4/wBXqZOyuOMczsSYyUE2X2VFh/E++lBWV2OpK7stkQ1ZmIUAWMHKFbX2To3p1qJq60Lpys9dizMq2yO1iuzWJuvhtUJvdcTSSXuye37EYhj/ACv/AEGqzS5eZGWHxeQSRRXF5LjplOtJuXIFGF9X5EU8pdix9w6DwFVFWViZSzO4IpiHFAEkcjLfKSLgqbEi4O4Ntx5VLSe41JrZh/OXuWztcrlJzG5W2XKTfUWFrdKMsbWsPPK97vlvw5DjEvmDZ2zBcoOY3C2y5Qb6C2lulGWNrWFnldO7v3hLi5NuY+wHtNspzKN9gdQPA0skeSH0k/ifjy28OBZj4xOCTzXJK5czMxYDMrd0k6G6iodCm+C8DRYmqr+09rbvmnpy2Ikx8wLMJZAz+0Q7At6m+vvqnTg0k0tOwzVaom2pO731eveMMVJ9d9lHtHZfYG/4vh08KeSPJf8A7uLpJ83w48tvDhyDkxsrG7SOxNrkuxvlvl3Phc26XNJU4LZLwG6tSW8m/m+G39BDGSZWXmPlYksMzWYnckX1J86WSN07LTsH0s7NZnZ76vXvHGKkvfmPfMGvma+YaBr39q3jvRkjtZf0HSTvfM+e7359/aHDi5FIKyOpC5QQzAhfqgg7eVJwi9Gl4FRqTjqpNcN3ty7ghjJcuXmPl+rna2pudL231o6OF72V+4fS1LWzO3ewvnstrcx7Zs1s7WzXvm39q+t+utLo4b2XgPpZ2tmfPd78+/iP87kKlDI+Um5XM1ib3JIvYm+t6Mkb3srj6Sdst3bvDkxkre1I7d0rqzHunddTselJQitkvAbqTlvJvhu9uQ7YqQ7u523Yn2b5fHwubdLmkoRWyQ3Um92/HlsCWJNybkm5J3J63qthXvqxxQAQpDDWkUiRaktBrSLRIKkpBikWiRaRSDFSUSCkUg1qWUiUP5VjKlyOiNXmV2aNpDGJZlYx3ZVK5MlyLEZba3NgbnQ+FYSozep0RrwSIp+z2GcAWlFtgJnUD0VbAegFT0Mi+ngx8L2cwqENyix/zu7/AOo0uikNVYmvIqE35UY8dFNtgNgfIUdGx9KmJluMvgRaw2t0sdKMgdIZ+F7PYSP2cPEP/rT7vKjLYM1zURQBYCwGwG1FguVMfwXDTm82HikPV41Y/Ei9JoakVB2O4f8AmWH/AOUv3UsqHmfM1sHgI4lyxRJGvREVR8FAosFyvx3DSyRZETNmNjrlIFxqDXNiadScMsEtef3zN8POEZZpMzeHdklEglOHgiewuyIua/4xzAA3J8b0OnVzaNJdw+kpW2uzo34dnFmAbQjvC+hFjruLjTQ1r0d1qZ9JZ6FTD9m1SVXW4CrlChu4Be5OUi+Y6i9zuahUYqSkW6zcbM6GCILWhmWFpDPnSvrT4oVACoAVACoAVACoAVACoAVACoAVAhxQA9AhUAPQIcUAKgQVAFvhu7/q2/hWdTZd5pS3fcVa0Mh6BCFADigRcx20f6tayhx7zar/AMe4rCtDIegBxSAIUDHFABCkA4oAQoEOKAHoAcUCHoAIUAEKQwhSKCFAwqQwqBhCkMIUhhCgYYpDCFAwhSGGtIpEi1JaDWkWiQVJSDFItEi0ikGKkokFIpBikUg1qSkGBSKJBSGgxUlIMUikSCkNBikUGtSxki0ikGKQyQVLKDFIZItIoNakZIKRRItSUSLSGf/Z" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis">








                        </div><!-- end blog-list -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="https://s3.envato.com/files/220388852/IMAGES%20PREVIEW/300x600.png" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Trend Videos</h2>
                            <div class="trend-videos">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="https://www.ngi.eu/wp-content/uploads/sites/18/2019/04/web-banner-2-800x460.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="https://www.ngi.eu/wp-content/uploads/sites/18/2019/04/web-banner-2-800x460.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="https://www.ngi.eu/wp-content/uploads/sites/18/2019/04/web-banner-2-800x460.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="tech-single.html" title="">Both blood pressure monitor and intelligent clock</a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end videos -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{ asset('/') }}front-end/upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://www.ngi.eu/wp-content/uploads/sites/18/2019/04/web-banner-2-800x460.png" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for..</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="https://www.ngi.eu/wp-content/uploads/sites/18/2019/04/web-banner-2-800x460.png" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful..</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Recent Reviews</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://www.veygo.com/wp-content/uploads/2019/05/blog_post_banner_3x-800x460.png" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                            <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                        </div>
                                    </a>

                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="https://www.veygo.com/wp-content/uploads/2019/05/blog_post_banner_3x-800x460.png" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                            <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                        </div>
                                    </a>

                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="https://www.veygo.com/wp-content/uploads/2019/05/blog_post_banner_3x-800x460.png" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">We are making homemade ravioli..</h5>
                                            <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Follow Us</h2>

                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button facebook-button">
                                        <i class="fa fa-facebook"></i>
                                        <p>27k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa fa-twitter"></i>
                                        <p>98k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa fa-google-plus"></i>
                                        <p>17k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa fa-youtube"></i>
                                        <p>22k</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end widget -->

                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="https://www.veygo.com/wp-content/uploads/2019/05/blog_post_banner_3x-800x460.png" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    @endforeach
@endsection
