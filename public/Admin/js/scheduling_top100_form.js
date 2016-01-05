function initDragEvent() {
    var dragLists = document.getElementsByClassName("drag-list")
    var courseTbs = document.getElementsByClassName("drag-course")
    var courseTbId = null;
    var dragsLen = dragLists.length
    var eleDrag = null
    var courseLen = courseTbs.length
    var dustbin = document.getElementById("dustbin")
    dustbin.ondrop = function (ev) {
        courseTb = document.getElementById(courseTbId)
        if (courseTb && confirm("放入垃圾箱后将不能找回!")) {
            courseTb.innerHTML = '';
        }
        return true;
    }
    dustbin.ondragover = function (ev){
            ev.preventDefault();
            return true;
    }
    // 课程列表拖动事件
    for (var i =0;i<dragsLen;i+=1) {
        var drag = dragLists[i]

        // 拖动目标
        drag.ondragstart = function(ev){
            ev.dataTransfer.effectAllowed = "move"
            // ev.dataTransfer.setDragImage(ev.target, 0,0)
            ev.dataTransfer.setData("text", ev.target.innerHtml);
            // 拖动开始
            eleDrag = ev.target
            fromTd = "course-list"
            return true;
        }
        // 放下拖动目标即松开鼠标时
        drag.ondragend = function (ev) {
            ev.dataTransfer.clearData("text")
            eleDrag = null
            return false;
        }
    }
    // 恢复样式
    function resetBoxShadow (ele) {
        ele.style.boxShadow = ""
    }
    // 日程拖动事件
    for(var i = 0; i<courseLen; i+=1) {
        var courseTb = courseTbs[i]
        // 拖动目标在目标头上移动
        courseTb.ondragover = function (ev){
            this.style.boxShadow = "inset 1px 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(233, 10, 37, 0.6)"
            ev.preventDefault();
            return true;
        }
        // 当拖动目标移动到目标上
        courseTb.ondragenter = function (ev) {
            this.style.boxShadow = "inset 1px 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(233, 10, 37, 0.6)"
            return true;
        }
        courseTb.ondragleave = function(ev) {
            resetBoxShadow(this)
            return true
        }
        // 将拖动目标放到目标中，此时鼠标松开
        courseTb.ondrop = function(ev) {
            this.innerHTML  = eleDrag.innerHTML 
            if (fromTd) fromTd.innerHTML = ''
            resetBoxShadow(this)
            return true;
        }
        courseTb.ondragstart = function(ev) {
            eleDrag = ev.target
            courseTbId = this.getAttribute("id")
            fromTd = this
            return true;
        }
    }

}


