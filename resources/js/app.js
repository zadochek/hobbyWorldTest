$(function () {
    $('.download').on('click', function (e) {
        e.preventDefault();
        $('.download').addClass('d-none')
        $('.expectation').removeClass('d-none')
        $.get({
            url: '/parse',
        })
        setTimeout(() => {
            getPosts();
            $('.expectation').addClass('d-none')
        }, 10000)
        
    })
    
    $('body').on('click', '.fullText',function () {
        $('.modal-body').html('');
        console.log( $(this).attr('data-id'))
        $.get({
            url: '/getsnippetpost/' +  $(this).attr('data-id'),
            success: function (response) {
                $('.modal-body').append(decodeHtml(response[0].snippet));
            }
        })
    })

    function getPosts() {
        $.get({
            url: '/getposts',
            success: function (response) {
                response.forEach(item => {
                    $('.more-item').append(`
                        <div class="more-content d-flex">
                            <div class="img-content">
                                <h6><a href="${item.url}" target="_blank">${item.title}</a></h6>
                                ${item.content.substring(0, 200) + '...'}
                                <button class="btn btn-primary btn-sm ml-4 fullText" data-id="${item.id}" data-toggle="modal" data-target=".bd-example-modal-lg">Полный текст</button>
                            </div>
                        </div>
                    `)
                })
                let paginateButtons = response.length / 5

                for (let i = 1; i <= paginateButtons; i++) {
                    $('.paginationButtons').append(`
                        <li class="page-item"><a class="page-link" href="#">${i}</a></li>      
                    `)
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    }

    $('body').on('click', 'a.page-link', function (e) {
        e.preventDefault();
        let page = 1;
        if (Number.isInteger(Number($(this).text()))) {
            page = Number($(this).text())
        }
        $.get({
            url: '/paginate/' + page,
            success: function (response) {
                $('.more-item').html('')
                response.forEach(item => {
                    $('.more-item').append(`
                        <div class="more-content d-flex">
                            <div class="img-content">
                                <h6><a href="${item.url}" target="_blank">${item.title}</a></h6>
                                ${item.content.substring(0, 200) + '...'}
                                <button class="btn btn-primary btn-sm ml-4 fullText" data-id="${item.id}" data-toggle="modal" data-target=".bd-example-modal-lg">Полный текст</button>
                            </div>
                        </div>
                    `)
                })
            },
            error: function (error) {
                console.log(error)
            }
        })
    })

    function decodeHtml(str)
    {
        var map =
        {
        '&amp;': '&',
        '&lt;': '<',
        '&gt;': '>',
        '&quot;': '"',
        '&#039;': "'"
        };

        return str.replace(/&amp;|&lt;|&gt;|&quot;|&#039;/g, function(m) {return map[m];});

    }
})