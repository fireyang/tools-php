            <?php echo $task->table('adding',array("prio","arr","check","text","image")); ?>
            <?php echo $task->table('loading',array("prio","arr","check","text","image")); ?>
            <?php $task->table('tasks',array('prio','arr','check','text','date','ico')); ?>
                <div id="tasks">
                    <table class="xtable xtable_tags_left">
                        <col class="col_prio"/>
                        <col class="col_arr"/>
                        <col class="col_check"/>
                        <col class="col_text"/>
                        <col class="col_date"/>
                        <col class="col_ico"/>
                        <tbody>
                            <?php
                                $i = 0;
                                foreach ($tasks as $task):
                            ?>
                                <tr class="xtr">
                                    <td class="xtd xtd_prio">
                                    </td>
                                <td class="xtd xtd_arr"/>
                                    <td class="xtd xtd_check">
                                        <input type="checkbox"/>
                                    </td>
                                    <td class="xtd xtd_text">
                                        <span class="xtd_task_name">
                                        <?php echo $task['Task']['name']; ?>
                                        </span>
                                    </td>
                                    <td class="xtd xtd_date">
                                    </td>
                                    <td class="xtd xtd_ico">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
