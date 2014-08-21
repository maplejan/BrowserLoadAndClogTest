(function (window, document) {
    var BLACT = {
        start: 0,
        record: [],
        mark: function () {},
        send: function () {}
    };

    var msg = 'DOM解析记录';

    BLACT.mark = function (info) {
        var time = 1 * new Date();
        this.record.push({
            info: info,
            time: time,
            moment: time - this.start
        });
        console.log('【' + info + '】: ' + (time - this.start) + 'ms');
    };

    BLACT.send = function () {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert('success');
            }
        };
        xhr.open('POST', '../../src/save-record.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('data=' + JSON.stringify(BLACT.record));
    };

    document.addEventListener('DOMContentLoaded', function () {
        BLACT.mark('DOM Loaded');
    }, false);

    window.onload = function () {
        BLACT.mark('Window Loaded');
        BLACT.mark('END');

        var str = '<h1>' + msg + '</h1>';
        for (var i = 0; i < BLACT.record.length; i++) {
            str += '<p>' + '【' + BLACT.record[i].info + '】: ' + BLACT.record[i].moment + 'ms' + '</p>';
        }

        str += '<button onclick="BLACT.send()">保存数据</button>';

        var div = document.createElement('div');
        div.innerHTML = str;
        document.body.appendChild(div);
    };

    BLACT.start = 1 * new Date();
    console.log(msg);

    window.BLACT = BLACT;
})(window, document);