<div class="tournaments">
    <h1>Турниры</h1>
    <section class="col-lg-12 tournaments_list">
        <table class="table">
            <thead>
            <tr>
                <th class="id">ID</th>
                <th class="name">Имя</th>
                <th class="status">Статус</th>
                <th class="type">Тип турнира</th>
                <th>О турнире</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tournaments as $tournament): ?>
            <tr>
                <td class="id"><?=$tournament['id'] ?></td>
                <td class="name"><?= $tournament['name'] ?></td>
                <td class="status"><?= decode_status($tournament['status']) ?></td>
                <td class="type"><i class="fa fa-user fa-fw" aria-hidden="true"></i></td>
                <td>
                    <form>
                        <button class="btn btn-default">О Турнире</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </section>

</div>