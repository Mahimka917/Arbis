<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center mdtext" id="messageModalLabel">Отправить сообщение</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="messageTopic" class="form-label">Тема сообщения</label>
                        <input type="text" class="form-control" id="messageTopic" placeholder="Введите тему сообщения">
                    </div>
                    <div class="mb-3">
                        <label for="messageContent" class="form-label">Содержание сообщения</label>
                        <textarea class="form-control" id="messageContent" rows="5" placeholder="Введите текст сообщения"></textarea>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary" style="background-color: #4170B7">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>