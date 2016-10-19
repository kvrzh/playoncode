<div class="tournaments">
    <h1>Турниры</h1>
    <section class="col-lg-12 tournaments_list">
        <table class="table">
            <tbody>
            <?php foreach ($tournaments as $tournament): ?>
            <tr>
                <td class="id"><?=$tournament['id'] ?></td>
                <td><?=$tournament['name'] ?></td>
                <td><?=decode_status($tournament['status']) ?></td>
                <td><i class="fa fa-user fa-fw" aria-hidden="true"></i></td>
                <td>
                    <form>
                        <button class="btn btn-default">Принять</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </section>

</div>