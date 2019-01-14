<table class="table table-hover" border="1px" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>id_karyawan</th>
										<th>nama_karyawan</th>
										<th>alamat_karyawan</th>
										<th>no_tlp</th>
									</tr>
								</thead>
								=<tbody>
									<?php foreach ($Karyawan as $Karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $Karyawan->id_karyawan ?>
										</td>
										<td>
											<?php echo $Karyawan->nama_karyawan ?>
										</td>
                    <td>
                      <?php echo $Karyawan->alamat_karyawan ?>
                    </td>
                    <td>
                      <?php echo $Karyawan->no_telp ?>
                    </td>

									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
