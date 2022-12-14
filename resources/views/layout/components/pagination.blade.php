<?php if ($this->pageCount): ?>
    <div class="pagination">
        <h1>Pages</h1>

        <ul class="pagelist">
            <?php
            // First page link
            if (isset($this->previous)):
                ?><li class="pagejump firstpage" title="First"><a href="<?php echo $this->url(array('page' => $this->first)); ?>">|«</a></li><?php
            else:
                ?><li class="pagejump firstpage currentpage" title="First"><span>|«</span></li><?php
            endif;

            // Previous page link
            if (isset($this->previous)):
                ?><li class="pagejump prevpage" title="Previous"><a href="<?php echo $this->url(array('page' => $this->previous)); ?>">«</a></li><?php
            else:
                ?><li class="pagejump prevpage currentpage" title="Previous"><span>&lt;</span></li><?php
            endif;

            // Numbered page links
            foreach ($this->pagesInRange as $page):
                if ($page != $this->current):
                    ?><li class="fromcurrentpage_<?php echo abs($page - $this->current) ?>"><a href="<?php echo $this->url(array('page' => $page)); ?>"><?php echo $page; ?></a></li><?php
                else:
                    ?><li class="currentpage"><span><?php echo $page; ?></span></li><?php
                endif;
            endforeach;

            // Next page link
            if (isset($this->next)):
                ?><li class="pagejump nextpage" title="Next"><a href="<?php echo $this->url(array('page' => $this->next)); ?>">»</a></li><?php
            else:
                ?><li class="pagejump nextpage currentpage" title="Next"><span>&gt;</span></li><?php
            endif;

            // Last page link
            if (isset($this->next)):
                ?><li class="pagejump lastpage" title="Last"><a href="<?php echo $this->url(array('page' => $this->last)); ?>">»|</a></li><?php
            else:
                ?><li class="pagejump lastpage currentpage" title="Last"><span>»|</span></li><?php
            endif;
            ?>
        </ul>

        <span class="paginationdesc">
            Viewing entries <?php echo $this->firstItemNumber; ?>-<?php echo $this->lastItemNumber; ?>
            of <?php echo $this->totalItemCount; ?>
        </span>
    </div>
<?php endif; ?>
